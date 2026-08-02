# CLAUDE.md

Working reference for `www.matthewgreen.gg` — personal portfolio site.

Planned work and priorities: see [ROADMAP.md](ROADMAP.md).

## Stack

- **Hugo** static site generator. Config TOML (`hugo.toml`); content front matter YAML.
- **`just`** task runner (`Justfile`). No Make, no npm, no Go modules, no `package.json`.
- **Git LFS** store media — see `.gitattributes`.
- **No CI.** No `.github/`, no workflows, no Netlify/Vercel/Cloudflare config. Build and deploy by
  hand.

Version note: `hugo.toml` declares `extended = false, min = "0.116.0"`, but
`apps/monthly-budget-planner` use SASS, which need Hugo **extended**. Full `just build` therefore
need extended Hugo despite config claim. Locally installed: `0.154.5+extended`.

## Commands

All via `just` (run `just` or `just help` to list):

| Recipe | What it does |
| --- | --- |
| `build-apps` | Builds `apps/monthly-budget-planner` (`--minify --cleanDestinationDir`), then rsyncs both apps into `public/apps/<name>/` |
| `build` | Depends on `build-apps`, then runs bare `hugo` |
| `test` | `hugo server --disableFastRender --bind=0.0.0.0 --baseURL=http://192.168.0.221:1313` |
| `test-with-apps` | Same as `test`, but rebuilds apps first |
| `test-fast-render` | Server with fast render left on |
| `update-repo` | `git fetch && git pull && git submodule update --init --recursive` |
| `install` | The deploy — see below |
| `clean` | `rm -rf apps/monthly-budget-planner/public/ public/` |

`test*` recipes bind `0.0.0.0` with **hardcoded LAN baseURL** (`192.168.0.221:1313`), set by
`local_ip` variable at top of `Justfile`.

## Deploy

`just install` run **on server itself**. Chains `update-repo` → `build` →
`sudo rsync -av --delete public/ /mnt/matthewgreen.gg/www/config/www` → `sudo chown -R root:root`.
Serving is self-hosted nginx.

This arrangement — Hugo required on server, submodules pulled there, manual invocation — what
Milestone 1 in [ROADMAP.md](ROADMAP.md) exists to replace. Don't invest in improving it.

## Git remotes

- `local` → `https://git.matthewgreen.gg/mgreen/...` (self-hosted Gitea, **primary**)
- `github` → `https://github.com/greenmatthew/...` (mirror)
- `all` → carries both as push URLs, so `git push all` publishes to both

## Submodules

Three, per `.gitmodules`:

- `themes/hugo-terminal.css` — site owner's **own** theme repo, Hugo port of
  [terminal.css](https://terminalcss.xyz/dark/). Fixing something in theme is legitimate option,
  not just override. Slated for replacement (Milestone 4).
- `apps/monthly-budget-planner` — **nested Hugo site** with own `hugo.toml` and `Justfile`.
- `apps/dnd-near` — archived plain static HTML/JS/CSS. Rsync'd verbatim, no build step.

## Content

Two content types. Both use YAML front matter.

**Projects** — leaf bundles at `content/<slug>/index.md` with sibling `media/` dir:

```yaml
---
title: "CAD Model Viewer"
id: "cad-model-viewer"
priority: 100
type: "project"
draft: false
summary: "..."
previewImage:
    src: "media/preview.png"
    alt: "CAD Model Viewer Preview"
    attribution: "..."   # optional
---
```

**Modules** — homepage sections at `content/modules/<name>.md`, `type: "module"`. Five exist:
about-me (0), projects (100), skills (200), work-experience (300), education (400).

`priority` **ascending** — lower renders first. Note `layouts/shortcodes/project-listings.html`
calls `errorf` and **fails the build** when project has no `priority`, and silently skips any page
whose priority **negative** — undocumented hide mechanism, separate from `draft`.

Bodies lean heavily on shortcodes rather than plain markdown: `heading-link` (~66 uses),
`media/image` (~37), `media/gallery-row`, `media/gallery`, `terminal-css/card`, `terminal-css/alert`,
`media/youtube/*`, `dropdown`. Work-experience and education embed raw HTML `<ul>` inside
`terminal-css/card`. `.markdownlint.jsonc` disables MD033 (inline HTML) and MD013 (line length).

## Custom layouts

Site-level overrides live in `layouts/`. Ones worth reading before editing:

- `layouts/index.html` — overrides theme homepage; ranges `modules` section by priority.
- `layouts/project/single.html` — project page template.
- `layouts/partials/module.html` — wraps each module in `<section id="..." class="module">`.
- `layouts/partials/head-extension.html` — theme's hook point; minifies and fingerprints
  `assets/css/{custom,media,dropdown}.css` and `assets/js/dropdown.js`.
- `layouts/partials/media/image.html` — hand-rolled image pipeline. Resolves page-bundle →
  global assets → remote, emits WebP at five widths (480/768/1024/1366/1920) in `<picture>` with
  srcset, plus lightbox link and `<figcaption>`. Subject of Milestone 5; treat as under review
  rather than settled.

## Known quirks

1. **Never add `--cleanDestinationDir` to the top-level build.** `build-apps` writes into
   `public/apps/`, then `build` runs bare `hugo` over it. Hugo doesn't clean by default, so apps
   survive — cleaning would wipe them. Likewise, `just clean` followed by bare `hugo` (without
   `build-apps`) silently produces site with no apps.
2. `baseURL = '/'` (set 2026-01-11, commit `535e5f5`) keeps builds host-agnostic behind reverse
   proxy, but leaves RSS and sitemap output without usable absolute URLs.
3. `hugo.toml` line 21 has bare `[main]` table that does nothing. `[[menus.main]]` is absolute TOML
   key, so menu entries land correctly at root regardless — but reads as if it scopes them.
4. `disableKinds = ["section"]` contradicts `[outputs] section = ["HTML"]`. Outputs entry inert.
5. `[permalinks] modules = "/:filename/"` publishes every module **twice** — inlined on `/` and
   standalone at `/about-me/`, `/skills/`, etc. Standalone copies render through theme's generic
   `_default/single.html`, which prints `<time>` element from date modules don't have. This line
   also emits build warning: `:filename` deprecated in Hugo 0.144.0, removed in future release —
   replacement is `:contentbasename`.
6. Archetype front-matter formats disagree: `archetypes/default.md` is TOML (`+++`), while
   `archetypes/module.md` and `archetypes/project/index.md` are YAML — and all real content YAML.
   `default.md` otherwise unused.
7. `hugo new` archetypes set `draft: true` and ship Lorem ipsum bodies; new content must be
   un-drafted before it appears.
8. Nav is **single-page jump menu** — all `hugo.toml` menu entries are anchors (`#about-me`,
   `#projects`, …), not real pages.

## Conventions

- Front-matter inline comments drifted between the two content types (modules say
  `# Higher numbers appear later`, projects say `# Controls order in listings (lower numbers appear
  first)`). Same meaning. Prefer project wording when touching either.
- Content files use `<!-- markdownlint-disable MD051 -->` around in-page TOC link lists.
- `.vscode/settings.json` holds only `cSpell.ignoreWords` list — add to it rather than fighting
  spellcheck warnings.