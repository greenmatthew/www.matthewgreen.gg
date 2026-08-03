# CLAUDE.md

Working reference for `www.matthewgreen.gg` — personal portfolio site.

Planned work and priorities: see [ROADMAP.md](ROADMAP.md).

## Stack

- **Hugo** static site generator. Config TOML (`hugo.toml`); content front matter YAML.
- **`just`** task runner (`Justfile`). No Make, no npm, no Go modules, no `package.json`.
- **Git LFS** store media — see `.gitattributes`.
- **CI is Gitea Actions**, `.gitea/workflows/deploy.yaml`, self-hosted runner. No `.github/`, no
  Netlify/Vercel/Cloudflare.
- **`jq`** required — `scripts/build-apps.sh` parse `data/apps.json` with it.

Version note: `hugo.toml` declares `extended = false, min = "0.116.0"`. **Both wrong.**
`monthly-budget-planner` use SASS, so need Hugo **extended**; theme's `baseof.html` use
`site.Language.Locale` / `.Direction`, added **0.158.0**; `app-listings.html` use `hugo.Data`,
added **0.156.0**. Real floor therefore **0.158.0 extended**. Locally installed: `0.164.0+extended`
(official `.deb` from gohugoio releases, live at `/usr/local/bin/hugo`, `apt-mark hold` set).

Don't `apt install hugo` — Ubuntu `resolute/universe` package (`/usr/bin/hugo`,
`VendorInfo=ubuntu:`) is 0.154.5, below floor. Runner need same 0.158.0+ upgrade before `master`
can deploy any of this.

## Commands

All via `just` (run `just` or `just help` to list):

| Recipe | What it does |
| --- | --- |
| `build-apps` | Runs `scripts/build-apps.sh` — builds every app in `data/apps.json`, installs to `public/apps/<name>/` |
| `build` | Depends on `build-apps`, then runs bare `hugo` |
| `test` | `hugo server --disableFastRender --bind=0.0.0.0 --baseURL=http://192.168.0.221:1313` |
| `test-with-apps` | Same as `test`, but rebuilds apps first |
| `test-fast-render` | Server with fast render left on |
| `clean` | `rm -rf public/ .apps-cache/` |

No `install` or `update-repo` recipe any more — deploy is CI's job.

`test*` recipes bind `0.0.0.0` with **hardcoded LAN baseURL** (`192.168.0.221:1313`), set by
`local_ip` variable at top of `Justfile`.

## Apps registry

`data/apps.json` is source of truth for apps. Build fields, read by `scripts/build-apps.sh`: `name`
(published at `public/apps/<name>/`), `repo`, `ref` (branch or tag — bare SHA won't work, shallow
clone by SHA needs Gitea server config that isn't enabled), `build` (shell command run in checkout;
empty = static, copied verbatim), `output` (dir within checkout to publish, `.` for whole thing).

Display fields, read by `layouts/shortcodes/app-listings.html`, ignored by script: `listed` (true =
linked from apps index; false = still built and deployed, just not advertised), `title`, `summary`.
Last two **required when `listed` true** — shortcode `errorf` otherwise, same as `project-listings`
does for missing `priority`. Index order = registry array order, no sort field.

`scripts/build-apps.sh` consume it, and is what **both** `just build-apps` and CI run, so local and
CI can't drift. If `apps/<name>/` exist locally it's used as-is and never fetched — that's how you
hack on app in place against real site. `apps/` is gitignored, since each checkout is own repo.
Otherwise clone lands in `$APPS_CACHE` (default `.apps-cache/`; CI points it at runner's persistent
volume so `actions/checkout` clean doesn't nuke it).

Adding app = one JSON entry, plus one `test -d public/apps/<name>` line in deploy workflow's verify
step. Don't edit `Justfile` for it. Unlisted app also want `Disallow: /apps/<name>/` line in
`static/robots.txt` — advisory only, not access control.

Apps aren't Hugo pages, so Hugo **can't** verify link from index resolve. Typo in `name` = silent
404, and those `test -d` lines are only guard.

## Deploy

Push to `master` triggers `.gitea/workflows/deploy.yaml` on self-hosted runner labelled
`site-builder` (host mode — job runs in runner container itself, no Docker socket). Steps: checkout
with LFS + submodules → `./scripts/build-apps.sh` → `hugo --minify` → sanity checks → `rsync -a
--delete --omit-dir-times --no-perms public/ /deploy/`. Serving is self-hosted nginx.
`workflow_dispatch` also available for manual run.

Three deliberate choices, don't undo them:

- **No `pull_request` trigger.** Runner has write access to live webroot; fork PR must never reach
  it. Trigger set makes that structural.
- **`--omit-dir-times --no-perms`.** `/deploy` owned by nginx uid 911, runner is uid 1000 in group
  911. Group-write enough to create/delete inside, but setting directory mtime or mode need
  *ownership*, so plain `-a` fail on destination root with EPERM. File mtimes still preserved,
  which is what rsync incremental compare need.
- **Verify step before rsync.** `--delete` against live webroot, so build that silently produced
  nothing would empty site. Checks `public/index.html` non-empty and all three app dirs exist. One
  line per app — add one when you add app.

## Git remotes

- `local` → `https://git.matthewgreen.gg/mgreen/...` (self-hosted Gitea, **primary**)
- `github` → `https://github.com/greenmatthew/...` (mirror)
- `all` → carries both as push URLs, so `git push all` publishes to both

## Submodules

One left, per `.gitmodules`:

- `themes/hugo-terminal.css` — site owner's **own** theme repo, Hugo port of
  [terminal.css](https://terminalcss.xyz/dark/). Fixing something in theme is legitimate option,
  not just override. Slated for replacement (Milestone 4), which is where submodule-vs-what
  question get settled.

Apps used to be submodules too. Now registry entries — see "Apps registry" above. Three exist:

- `monthly-budget-planner` — **nested Hugo site**, own `hugo.toml` and `Justfile`. Needs Hugo
  extended (SASS).
- `dnd-near` — archived plain static HTML/JS/CSS, copied verbatim, no build step.
- `delta-diff` — client-side text diff tool. Static, no build step. `index.html` + `css/style.css`
  + `js/app.js` + `vendor/`. **`jsdiff` vendored deliberately** (pinned 7.0.0 UMD, BSD-3 license
  shipped alongside) — was CDN-loaded with no SRI, which is untenable for tool people paste
  confidential text into. Don't "modernize" it back to a CDN. MIT.

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

**Modules** — homepage sections at `content/modules/<name>.md`, `type: "module"`. Six exist:
about-me (0), projects (100), apps (150), skills (200), work-experience (300), education (400).

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
- `layouts/module/single.html` — standalone module page (see quirk 5). Exists to *not* print theme's
  `<time>`, which modules have no date for.
- `layouts/partials/module.html` — wraps each module in `<section id="..." class="module">`.
- `layouts/partials/head-extension.html` — theme's hook point; minifies and fingerprints
  `assets/css/{custom,media,dropdown}.css` and `assets/js/dropdown.js`.
- `layouts/partials/media/image.html` — hand-rolled image pipeline. Resolves page-bundle →
  global assets → remote, emits WebP at five widths (480/768/1024/1366/1920) in `<picture>` with
  srcset, plus lightbox link and `<figcaption>`. Subject of Milestone 6; treat as under review
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
5. `[permalinks] modules = "/:contentbasename/"` publishes every module **twice** — inlined on `/`
   and standalone at `/about-me/`, `/skills/`, etc. (Token itself fixed — was `:filename`, removed
   in Hugo 0.164.0. Zero-date `<time>` fixed too, by `layouts/module/single.html`.) Double render
   now **load-bearing**: `content/modules/apps.md` standalone copy *is* `/apps/` index page. Don't
   remove standalone module pages without replacing that.
6. `content/modules/apps.md` publishes to `public/apps/`, same dir `build-apps.sh` install apps
   into. Not conflict: script rsync each app's own subdir, never parent, and `hugo` don't clean
   (quirk 1). But it mean `just clean` + bare `hugo` produce `/apps/` index whose every link 404.
7. Archetype front-matter formats disagree: `archetypes/default.md` is TOML (`+++`), while
   `archetypes/module.md` and `archetypes/project/index.md` are YAML — and all real content YAML.
   `default.md` otherwise unused.
8. `hugo new` archetypes set `draft: true` and ship Lorem ipsum bodies; new content must be
   un-drafted before it appears.
9. Nav is **single-page jump menu** — all `hugo.toml` menu entries are anchors (`#about-me`,
   `#projects`, …), not real pages. Theme's `menu.html` prefix each with `site.BaseURL`, so they
   render `/#apps` and work from any page, not only `/`.
10. **Hugo below 0.158.0 can't build this site at all** — theme submodule commit `26ace06` use
    `site.Language.Locale` / `.Direction`, and error is `can't evaluate field Locale in type
    *langs.Language`. Workstation fixed (0.164.0, see Version note above). **Runner not verified** —
    `master` sit at `71644c4`, before theme bump, so live site fine today, but deploy will break
    the moment anything newer merge. Check runner's Hugo before pushing `master`.

## Conventions

- Front-matter inline comments drifted between the two content types (modules say
  `# Higher numbers appear later`, projects say `# Controls order in listings (lower numbers appear
  first)`). Same meaning. Prefer project wording when touching either.
- Content files use `<!-- markdownlint-disable MD051 -->` around in-page TOC link lists.
- `.vscode/settings.json` holds only `cSpell.ignoreWords` list — add to it rather than fighting
  spellcheck warnings.