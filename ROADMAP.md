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

**Status:** Done

`delta-diff` — client-side text diff tool, formerly single 24 KB HTML file sitting in Downloads with no version control. (Roadmap previously mis-described this as "icon generator".) Built because online diff tools want account, impose daily limit, or give no assurance pasted text isn't uploaded — no good for confidential data.

**What shipped**

- **Own repo**, `mgreen/delta-diff`, wired in as registry entry in `data/apps.json`. **No submodule** — Milestone 1 already killed that arrangement. Published at `/apps/delta-diff/`. `build` empty, `output` `.` — plain static, copied verbatim.
- **Monofile split three ways** — `index.html` (markup) / `css/style.css` / `js/app.js`, plus `vendor/`. No bundler, no Node, no build step, so toolchain-agnostic constraint holds.
- **`jsdiff` vendored and pinned** at 7.0.0. Was loaded from `cdnjs.cloudflare.com` at runtime through three-URL fallback chain **with no SRI** — unverified remote script with full access to whatever sat in textareas, on tool whose whole pitch is safety for confidential data. Now zero third-party requests, works offline, privacy claim in header unconditionally true. CDN array, `loadDiff()`, and load-failure banner all deleted.
- **Licensed** — MIT for app, jsdiff's BSD-3 shipped at `vendor/jsdiff-LICENSE.txt` and credited in footer. Serving source to browser grants no license; needed explicit file.
- `.gitignore` gained `apps/` — local app checkouts are separate repos, don't belong to this one.
- Verify step in `.gitea/workflows/deploy.yaml` gained `test -d public/apps/delta-diff`. That guard is per-app by design.

**Carried forward**

- `listed: true` in registry, so it appears once Milestone 3 builds apps index. Nothing links to it until then.

---

## 3. Apps section / page

**Status:** Done

Apps existed under `/apps/` with nothing linking to them. Now indexed, with public/private distinction.

**What shipped**

- **Registry gained display metadata** — `title` and `summary` per entry in `data/apps.json`, required when `listed: true`. Adding app to index is still one JSON entry, no template edit. Schema comment at top of `scripts/build-apps.sh` documents all three Hugo-side fields; script itself ignores them.
- **`layouts/shortcodes/app-listings.html`** — ranges `where site.Data.apps.apps "listed" true`, in registry order. No sort field; reorder index by reordering JSON. `errorf` on listed app missing `title`/`summary`, same fail-build convention `project-listings.html` uses for `priority`.
- **Homepage module** at `content/modules/apps.md`, priority 150 — between projects (100) and skills (200). Nav entry `#apps` at weight 25. Standalone page, not separate template, per "both" answer below.
- **`/apps/` landing page falls out of quirk #5 for free.** `[permalinks] modules = "/:contentbasename/"` publishes `apps.md` at `/apps/` — same directory `build-apps.sh` populates. Safe because `build-apps.sh` rsyncs each app's own subdirectory and never the `public/apps/` parent, and `hugo` doesn't clean. So double-render, normally a wart, produces real index page at natural URL.
- **`layouts/module/single.html`** — standalone module pages used to fall through to theme's `_default/single.html`, which prints `<time>` from date modules don't carry, rendering "January 1, 0001" on `/about-me/`, `/skills/` and friends. Override drops it. Half of quirk #5 resolved; the "should modules publish standalone at all" half still belongs to Milestone 4.
- **Unlisted = built, deployed, reachable, not advertised.** `dnd-near` keeps `listed: false`, plus `Disallow: /apps/dnd-near/` in `static/robots.txt`. Hand-maintained one line per unlisted app, matching the per-app verify-step pattern. Advisory only — anything needing real privacy is nginx auth, deliberately not built here.
- Verify step in `.gitea/workflows/deploy.yaml` gained `test -s public/apps/index.html`. Hugo has no page for apps and cannot check a link target exists, so a typo'd `name` is a silent 404; the per-app `test -d` lines are the only guard.

**Carried forward**

- **No preview images on app cards.** Projects get them via `media/image.html`, but apps have no page bundle, so previews need images committed to this repo at `assets/apps/<name>/` (LFS already covers `.png`) plus a `preview` registry field. Deferred rather than dropped — deliberately not built against `layouts/partials/media/image.html` while that partial is under review. Pick it back up in Milestone 6, once the image pipeline settles.

---

## 4. Theme switch

**Status:** Not started

Replace `themes/hugo-terminal.css`, showing its age. Largest churn in roadmap — layouts, partials, shortcodes, CSS all move.

Note current theme is site owner's own repo, so shortcomings fixable not inherited. Reasons to move on anyway: loads terminal.css 0.7.4, highlight.js 9.13.1 (very old, uses deprecated `hljs.highlightBlock`), and `buttons.js` from CDNs with no SRI; `theme.toml` and README still unfilled scaffolding; carries dead partials (`head/css.html` looks for `css/main.css` that doesn't exist).

**Intended target — Minimal Black**

<https://themes.gohugo.io/themes/hugo-minimal-black/> — theme directory listing, the page to revisit
for screenshots, tags and full feature list.

| | |
| --- | --- |
| Source | <https://gitlab.com/jimchr12/hugo-minimal-black> (GitLab, not GitHub/Gitea) |
| Demo | <https://minimal-black-demo.netlify.app> |
| Author | Jim Christopoulos, <https://jimchristopoulos.com/> |
| License | MIT |
| Requires | Hugo **extended ≥ 0.120.0**, plus **Node.js + npm** for Tailwind |
| Install | git submodule or plain clone into `themes/minimal-black` — no Hugo Module |
| Last updated | 2025-12-22 |

Advertised: dark-mode-first true black with purple accents, light/dark toggle, responsive, built-in
search, TOC, syntax highlighting, Mermaid, GFM, Font Awesome + Devicon, multiple about-page layouts,
Google Analytics hook.

**What choosing it decides**

- **Breaks the toolchain-agnostic constraint.** Tailwind means `npm install` in `themes/minimal-black`
  before Hugo runs — a real build step, on the runner too, contradicting Milestone 1's carried-forward
  rule and CLAUDE.md's "no npm, no `package.json`". Either accept Node on the runner (and add the step
  to `.gitea/workflows/deploy.yaml`) or precompile the CSS once and commit it. Decide before any layout
  work starts.
- **Hugo floor is satisfied** — 0.120.0 extended is below the site's existing 0.158.0 floor, and the
  workstation is on 0.164.0 extended. Runner still unverified (Milestone 8).
- **Submodule question survives.** Ships as a submodule from a *third* host, so the answer isn't
  "drop submodules" by default — it's swap `themes/hugo-terminal.css` for `themes/minimal-black`, or
  vendor it to keep the dependency on Gitea.
- **Not a Hugo Module**, so it doesn't force Milestone 5's Go question either way.

**Open questions**

- Node/npm: accept on runner, or precompile Tailwind CSS and commit? See above.
- How much custom shortcode surface (`heading-link`, `media/*`, `dropdown`) carries over vs gets rebuilt
  against new theme conventions?
- Theme is blog/portfolio-shaped; this site is a single-page jump-menu homepage built from `modules`
  (quirk 9). How much of `layouts/index.html` and `layouts/partials/module.html` survives?
- Own theme repo is being traded for a single-maintainer external one — shortcomings stop being
  fixable-in-place, same maintenance risk noted in Milestone 5.

---

## 5. Hugo Modules evaluation

**Status:** Not started

Decide whether site adopts **Hugo Modules**, and if so which. Hugo has no "plugin" or "extension" system of its own — Hugo Modules *is* the mechanism, and it's Go modules underneath. Anything third-party (including [hugomods.com](https://hugomods.com/), one-maintainer collection) rides on it.

Sits before image pipeline review deliberately: `hugomods/images` may answer most of Milestone 6, and there's no point hand-refactoring pipeline that gets replaced.

**Gating question — Go on runner**

Hugo Modules need **Git and Go 1.18+ installed on build machine**. Site is currently declared toolchain-agnostic (CLAUDE.md: "No Make, no npm, no Go modules, no `package.json`"), and Milestone 1's carried-forward constraint says design stay that way. Adopting *any* module breaks that.

`hugo mod vendor` copies dependencies into `_vendor/`, which removes build-time network fetch and makes deps auditable in-repo — but doesn't remove Go from `hugo mod` operations, and adds vendored third-party source to repo. Confirm what vendored build actually needs before assuming it's escape hatch.

This is one decision for whole milestone. Answer no and rest is moot; answer yes and runner image, `.gitea/workflows/deploy.yaml`, and local `just` setup all need Go, once.

**Candidates, ranked by actual value here**

- **`hugomods/images` — the reason this milestone exists.** Processes images via URL query string/fragment (resize, crop, fit, fill, filter, align), auto-converts to WebP with `<picture>` fallback, lazy-loads by default, sets intrinsic width/height against CLS. Overlaps heavily with `layouts/partials/media/image.html`. Open: does it emit responsive **srcset across breakpoints**, or only single processed image per call? Current partial's whole point is five-width srcset — if module doesn't do that, it replaces less than it looks like it does. Also unclear whether lightbox, `<figcaption>`, attribution, and page-bundle → global-assets → remote resolution chain survive or get rebuilt.
- **`hugomods/encoder`** — obfuscates email and phone against scrapers. Real target exists: `themes/hugo-terminal.css/layouts/partials/footer.html:10` emits plain `mailto:work@matthewgreen.gg` on every page. Small, self-contained, easiest win if Go accepted.
- **Analytics — pick at most one.** Site currently has **none**, so this is new capability not migration. `umami` (self-hostable, privacy-first, fits existing self-hosted Gitea/nginx setup) is best fit. `cloudflare` needs Cloudflare in front of site, which conflicts with current self-hosted nginx + host-agnostic `baseURL = '/'`. `baidu` has no plausible audience here. Minimal Google Analytics contradicts reason `delta-diff` exists. Adding analytics is also privacy decision, not just technical one — decide *whether*, not only *which*.
- **`hugomods/video-js`, `hugomods/swagger`** — no current need. Video content is YouTube embeds via existing `media/youtube/*` shortcodes; no self-hosted video files. No API docs on site at all. Revisit only if content demands it.
- **`hugomods/icons`, `hugomods/seo`, `hugomods/pwa`** — not asked for, but worth pricing during evaluation since they'd land in Milestone 4 or 6 territory anyway.

**Open questions**

- Does Milestone 4's theme choice force answer? Hugo Modules are also how modern themes install — picking module-based theme decides Go question by itself, in which case merge this milestone into 4.
- Supply-chain posture. Vendored `jsdiff` precedent (Milestone 2) says pin and vendor third-party code rather than fetch at runtime. Same standard should apply to modules: pin versions, vendor, review before bumping.
- Maintenance risk of depending on single-maintainer module collection versus keeping ~200 lines of own partial.

---

## 6. Image pipeline review

**Status:** Not started

`layouts/partials/media/image.html` hand-rolled, never reviewed since. Generates WebP at five widths (480/768/1024/1366/1920) into `<picture>`/srcset with lightbox and caption support.

Sits after theme switch because partly theme-coupled — `image-large|medium|small|auto` size classes live in `assets/css/media.css`, styled against current theme. Scope depends on Milestone 5 outcome — if `hugomods/images` adopted, this becomes migration rather than refactor.

**Worth investigating:** whether Hugo newer image-processing features supersede parts of hand-rolled logic; whether five breakpoints right number; whether AVIF worth adding alongside WebP; and whether resolution chain (page bundle → global assets → remote) does anything Hugo now does natively.

**Inherited from Milestone 3:** app cards in `/apps/` index have no preview images, because apps have no page bundle and the global-assets path runs through the partial under review here. Add `preview` field to `data/apps.json` and images at `assets/apps/<name>/` once the pipeline is settled — it's the first consumer test of whatever resolution chain survives.

---

## 7. Content refresh

**Status:** Not started

Add, remove, refactor content so current and suits new theme. Depends on Milestone 4 explicitly.

**Known starting points**

- `content/modules/about-me.md` hardcodes age ("24-year-old") needing periodic edit — rephrase to something that doesn't go stale.
- Seven projects exist; some may warrant removal or consolidation.
- Work-experience and education modules embed raw HTML `<ul>` inside `terminal-css/card` shortcodes — won't survive theme switch as-is.

---

## 8. Mistake hunt

**Status:** Ongoing

Continuous, not discrete phase — folded into each milestone above. Concrete items already found:

- **36 MB of `.jxr` files committed as raw git blobs.**
  `content/rad-tv-for-ps-vr2/media/unused/` is 83 MB total, and `.gitattributes` doesn't list `.jxr` — so three HDR files (14 MB, 13 MB, 8.6 MB) sit in git history proper, not LFS. Hugo can't process `.jxr` anyway, and directory named "unused". Removing from history is a rewrite — weigh against just deleting going forward.
- ~~**Deprecated permalink token.**~~ **Fixed** — `hugo.toml` now uses `modules = "/:contentbasename/"`. The zero-date `<time>` those standalone pages printed is fixed too, by `layouts/module/single.html` (Milestone 3). Still open: whether modules should publish standalone pages at all, since each one renders twice (inlined on `/` and at `/about-me/` etc.). Milestone 3 now depends on one of them — `/apps/` *is* the module's standalone render — so removing them wholesale is no longer free. Revisit in Milestone 4.
- ~~**Theme requires Hugo ≥ 0.158.0, workstation has 0.154.5.**~~ **Half fixed.** Theme commit `26ace06` moved `baseof.html` to `site.Language.Locale` / `.Direction`, which don't exist on older Hugo, so the build died with `can't evaluate field Locale in type *langs.Language`. Workstation now on **0.164.0 extended**, from the official gohugoio `.deb` rather than Ubuntu's `resolute/universe` package, which is stuck at 0.154.5 — `apt-mark hold` keeps it that way. **The runner is the open half.** `master` is still at `71644c4`, one commit before the theme bump, so the live site is unaffected — but the first merge carrying `83687f5` will fail the build unless the runner image is on 0.158.0+ too. Verify that before pushing `master`, not after.
- `static/private/` empty, produces stray `public/private/` every build.
- `.gitignore` still excludes `static/media/cad-model-viewer/lessons`, path no longer anywhere in repo.
- `layouts/shortcodes/dropdown.html` generates IDs via `printf "dropdown-%d" (add 1000 (mul (now.UnixMilli) (len $title)))` — two dropdowns with same-length titles built in same millisecond collide.
- `hugo.toml` config contradictions and duplicate module rendering listed under "Known quirks" in [CLAUDE.md](CLAUDE.md).
- Front-matter inline comments drifted between module and project files.