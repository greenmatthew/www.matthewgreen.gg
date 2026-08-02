# Roadmap

Planned work on `www.matthewgreen.gg`, priority order. Milestones one at time — each get own detailed planning pass before implementation.

Status key: **Not started** · **In progress** · **Done**

---

## 1. Build & install refactor

**Status:** Done

Got off app submodules, and off requirement that Hugo be installed on server to compile and rsync into nginx content directory.

**What shipped**

- Builds run in **Gitea Actions** on self-hosted instance — `.gitea/workflows/deploy.yaml`, push to `master` or manual `workflow_dispatch`. No `pull_request` trigger on purpose: runner has write access to live webroot, so fork PR must never reach it.
- Deploy is `rsync -a --delete --omit-dir-times --no-perms public/ /deploy/`, guarded by build-nonempty checks (`public/index.html`, both app dirs) so failed build can't empty site. `just install` gone; Hugo no longer on server.
- **App submodules replaced by registry** — `data/apps.json` lists name/repo/ref/build/output/listed; `scripts/build-apps.sh` clones, builds, installs to `public/apps/<name>/`. Adding app = one JSON entry, no `Justfile` edit. Same script runs locally and in CI, so builds can't drift. Local `apps/<name>/` checkout wins over clone, so in-place hacking still works.
- `listed` field already in registry, reserved for Milestone 3 apps index.

**Carried forward**

- `themes/hugo-terminal.css` **still a submodule** — only one left. Theme replaced in Milestone 4 anyway; resolve submodule question there rather than churn twice.
- **Constraint still stands:** design stay **toolchain-agnostic**. If theme chosen in Milestone 4 needs Node/npm, runner must absorb that without second rewrite.

---

## 2. Add the new app

**Status:** Not started

Single self-contained HTML file (icon generator) currently living outside repo. Commit it = no more risk of losing it; wiring trivial once Milestone 1 settles how apps built and installed.

**Open questions**

- Where file live, and what name in-repo?
- What URL to serve at (e.g. `/apps/<name>/`)?
- Fully self-contained, or pulls external resources at runtime?

---

## 3. Apps section / page

**Status:** Not started

Make apps discoverable — now they exist under `/apps/` with nothing linking to them. Needs public/private distinction: some apps stay unlisted.

Falls out of Milestones 1 and 2 naturally, since both touch how apps registered.

**Open questions**

- How "private" enforced? Unlisted but reachable by URL / excluded from build entirely / behind auth at nginx layer.
- Homepage module (like projects), standalone page, or both?

---

## 4. Theme switch

**Status:** Not started

Replace `themes/hugo-terminal.css`, showing its age. Largest churn in roadmap — layouts, partials, shortcodes, CSS all move.

Note current theme is site owner's own repo, so shortcomings fixable not inherited. Reasons to move on anyway: loads terminal.css 0.7.4, highlight.js 9.13.1 (very old, uses deprecated `hljs.highlightBlock`), and `buttons.js` from CDNs with no SRI; `theme.toml` and README still unfilled scaffolding; carries dead partials (`head/css.html` looks for `css/main.css` that doesn't exist).

**Open questions**

- Target theme not chosen yet — picking one may be part of this milestone.
- Replacement need Node/npm toolchain? Feeds back into Milestone 1 design.
- How much custom shortcode surface (`heading-link`, `media/*`, `dropdown`) carries over vs gets rebuilt against new theme conventions?

---

## 5. Image pipeline review

**Status:** Not started

`layouts/partials/media/image.html` hand-rolled, never reviewed since. Generates WebP at five widths (480/768/1024/1366/1920) into `<picture>`/srcset with lightbox and caption support.

Sits after theme switch because partly theme-coupled — `image-large|medium|small|auto` size classes live in `assets/css/media.css`, styled against current theme.

**Worth investigating:** whether Hugo newer image-processing features supersede parts of hand-rolled logic; whether five breakpoints right number; whether AVIF worth adding alongside WebP; and whether resolution chain (page bundle → global assets → remote) does anything Hugo now does natively.

---

## 6. Content refresh

**Status:** Not started

Add, remove, refactor content so current and suits new theme. Depends on Milestone 4 explicitly.

**Known starting points**

- `content/modules/about-me.md` hardcodes age ("24-year-old") needing periodic edit — rephrase to something that doesn't go stale.
- Seven projects exist; some may warrant removal or consolidation.
- Work-experience and education modules embed raw HTML `<ul>` inside `terminal-css/card` shortcodes — won't survive theme switch as-is.

---

## 7. Mistake hunt

**Status:** Ongoing

Continuous, not discrete phase — folded into each milestone above. Concrete items already found:

- **36 MB of `.jxr` files committed as raw git blobs.**
  `content/rad-tv-for-ps-vr2/media/unused/` is 83 MB total, and `.gitattributes` doesn't list `.jxr` — so three HDR files (14 MB, 13 MB, 8.6 MB) sit in git history proper, not LFS. Hugo can't process `.jxr` anyway, and directory named "unused". Removing from history is a rewrite — weigh against just deleting going forward.
- ~~**Deprecated permalink token.**~~ **Fixed** — `hugo.toml` now uses `modules = "/:contentbasename/"`. Still open: whether modules should publish standalone pages at all, since each one renders twice (inlined on `/` and at `/about-me/` etc.). Revisit in Milestone 4.
- `static/private/` empty, produces stray `public/private/` every build.
- `.gitignore` still excludes `static/media/cad-model-viewer/lessons`, path no longer anywhere in repo.
- `layouts/shortcodes/dropdown.html` generates IDs via `printf "dropdown-%d" (add 1000 (mul (now.UnixMilli) (len $title)))` — two dropdowns with same-length titles built in same millisecond collide.
- `hugo.toml` config contradictions and duplicate module rendering listed under "Known quirks" in [CLAUDE.md](CLAUDE.md).
- Front-matter inline comments drifted between module and project files.