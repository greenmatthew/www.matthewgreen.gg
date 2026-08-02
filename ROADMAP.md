# Roadmap

Planned work on `www.matthewgreen.gg`, in priority order. Milestones are tackled one at a time —
each gets its own detailed planning pass before implementation.

Status key: **Not started** · **In progress** · **Done**

---

## 1. Build & install refactor

**Status:** Not started

Get off git submodules, and off the requirement that Hugo be installed on the server to compile and
rsync into the nginx content directory.

Foundational, so it goes first: everything downstream ships through this pipeline, and it's
independent of both theme and content. Doing it now means every later milestone has a build/deploy
loop worth trusting.

Current arrangement (documented in [CLAUDE.md](CLAUDE.md)): `just install` runs on the server,
chaining `update-repo` → `build` → `sudo rsync` → `chown`, with three submodules pulled down and
Hugo extended required on the box.

**Open questions**

- Where do builds run? Gitea Actions on the self-hosted instance / GitHub Actions publishing
  artifacts / build on the workstation and deploy only the output.
- What replaces the submodules for the theme and the apps?
- How do apps get registered with the build, so adding one isn't a bespoke `Justfile` edit each time?

**Constraint:** the design must stay **toolchain-agnostic**. If the theme chosen in Milestone 4
needs Node/npm, the pipeline has to absorb that without a second rewrite.

---

## 2. Add the new app

**Status:** Not started

A single self-contained HTML file (an icon generator) that currently lives outside the repo. Getting
it committed removes the risk of losing it; wiring it up is trivial once Milestone 1 settles how apps
are built and installed.

**Open questions**

- Where does the file live, and what should it be called in-repo?
- What URL should it be served at (e.g. `/apps/<name>/`)?
- Is it fully self-contained, or does it pull external resources at runtime?

---

## 3. Apps section / page

**Status:** Not started

Make apps discoverable — currently they exist under `/apps/` with nothing linking to them. Needs a
public/private distinction: some apps should stay unlisted.

Falls naturally out of Milestones 1 and 2, since both touch how apps are registered.

**Open questions**

- How is "private" enforced? Unlisted but reachable by URL / excluded from the build entirely /
  behind auth at the nginx layer.
- Does this become a homepage module (like projects), a standalone page, or both?

---

## 4. Theme switch

**Status:** Not started

Replace `themes/hugo-terminal.css`, which is showing its age. This is the largest churn in the
roadmap — layouts, partials, shortcodes, and CSS all move.

Worth noting the current theme is the site owner's own repo, so its shortcomings are fixable rather
than inherited. Reasons to move on anyway: it loads terminal.css 0.7.4, highlight.js 9.13.1 (very
old, uses the deprecated `hljs.highlightBlock`), and `buttons.js` from CDNs with no SRI; its
`theme.toml` and README are still unfilled scaffolding; and it carries dead partials
(`head/css.html` looks for a `css/main.css` that doesn't exist).

**Open questions**

- Target theme not yet chosen — selecting one may be part of this milestone.
- Does the replacement need a Node/npm toolchain? This feeds back into Milestone 1's design.
- How much of the custom shortcode surface (`heading-link`, `media/*`, `dropdown`) carries over
  versus gets rebuilt against the new theme's conventions?

---

## 5. Image pipeline review

**Status:** Not started

`layouts/partials/media/image.html` is hand-rolled and hasn't been reviewed since. It generates WebP
at five widths (480/768/1024/1366/1920) into a `<picture>`/srcset with lightbox and caption support.

Sits after the theme switch because it's partly theme-coupled — the `image-large|medium|small|auto`
size classes live in `assets/css/media.css` and are styled against the current theme.

**Worth investigating:** whether Hugo's newer image-processing features supersede parts of the
hand-rolled logic; whether five breakpoints is the right number; whether AVIF is worth adding
alongside WebP; and whether the resolution chain (page bundle → global assets → remote) is doing
anything Hugo now does natively.

---

## 6. Content refresh

**Status:** Not started

Add, remove, and refactor content so it's current and suits the new theme. Explicitly depends on
Milestone 4.

**Known starting points**

- `content/modules/about-me.md` hardcodes an age ("24-year-old") that needs periodic editing —
  worth rephrasing to something that doesn't go stale.
- Seven projects exist; some may warrant removal or consolidation.
- Work-experience and education modules embed raw HTML `<ul>` inside `terminal-css/card` shortcodes,
  which won't survive the theme switch as-is.

---

## 7. Mistake hunt

**Status:** Ongoing

Continuous rather than a discrete phase — folded into each milestone above. Concrete items already
identified:

- **36 MB of `.jxr` files committed as raw git blobs.**
  `content/rad-tv-for-ps-vr2/media/unused/` is 83 MB total, and `.gitattributes` doesn't list `.jxr`
  — so the three HDR files (14 MB, 13 MB, 8.6 MB) are in git history proper, not LFS. Hugo can't
  process `.jxr` anyway, and the directory is named "unused". Removing them from history is a
  rewrite, so weigh it against just deleting them going forward.
- **Deprecated permalink token — will break on a future Hugo.** `hugo.toml` uses
  `[permalinks] modules = "/:filename/"`; `:filename` was deprecated in Hugo 0.144.0 and is slated
  for removal. Replacement is `:contentbasename`. The build warns about this today. Worth resolving
  alongside the decision about whether modules should publish standalone pages at all.
- `static/private/` is empty and produces a stray `public/private/` on every build.
- `.gitignore` still excludes `static/media/cad-model-viewer/lessons`, a path that no longer exists
  anywhere in the repo.
- `layouts/shortcodes/dropdown.html` generates IDs via
  `printf "dropdown-%d" (add 1000 (mul (now.UnixMilli) (len $title)))` — two dropdowns with
  same-length titles built in the same millisecond collide.
- The `hugo.toml` config contradictions and duplicate module rendering listed under "Known quirks"
  in [CLAUDE.md](CLAUDE.md).
- Front-matter inline comments have drifted between module and project files.
