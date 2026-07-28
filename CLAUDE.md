# imperium-lite — project reference (READ FIRST)

## What this is — never forget

- **imperium-lite is a STANDALONE project.** It must not depend on any file outside its
  own folder. When building/fixing pages here, everything they need (controllers, views,
  layouts, helpers, libs, assets, cms/data JSON) must live **inside `imperium-lite/`**.
- **This copy — `New Imperium Website/imperium-lite/` — is the one the user is working on.**
  It is kept *inside* `New Imperium Website` only so the full/old site can be referenced as
  a source while building lite pages.
- When the project is finished it will be **moved out of `New Imperium Website`** and hosted
  on its own. It is intended to **replace the current live website** (which is presently the
  full `New Imperium Website`).
- Because it will be extracted and hosted standalone: **remove any dependency on
  `New Imperium Website` files.** Never reference `../` paths that escape `imperium-lite/`.

## How it runs

- PHP built-in server: `php -S localhost:8001 router.php` run **from this folder**.
- No restart needed after editing PHP/views — files are re-read per request. (After editing
  a Blade layout, clear compiled views: delete files under `cache/`.)

## Routing — IMPORTANT gotcha

Chain: `router.php` → `index.php` → `libs/Bootstrap.php`.

`Bootstrap.php` has an explicit route **whitelist** (`$allowed`). Any first path segment not
in it 404s (via `controllers/IMK_Error.php`) **even if the controller + view files exist.**
To add a page you must do ALL THREE:

1. Add `controllers/<slug>.php`
2. Add `views/<slug>.blade.php`
3. Add `<slug>` to `$allowed` in `libs/Bootstrap.php`

## Pages (intended final set)

- `index` (home `/`), `casestudy`, `industry-influence` (Verticals listing — cards from
  `cms/data/verticals.json`), and the 12 vertical inside pages: `healthcare`,
  `debtcollection`, `helpdesk`, `businesscenter`, `logistics`, `educationsector`,
  `ecommerce`, `realestate`, `retail`, `banking`, `finance`, `insurance`.

## Consolidation status (2026-07-24)

There was a **second copy** at `c:/programming/dev imperium website/imperium-lite` (the
"outside" copy — the one the `:8001` server was originally serving).

**CORRECTED understanding:** the OUTSIDE copy is the newer / more complete one in every
respect — newer homepage (160 KB, 07-23 17:53), newer trimmed navbar (2 KB, edited
2026-07-24 11:49), self-hosted fonts, extra images, and the vertical pages. THIS nested copy
was an **older snapshot** (older homepage 102 KB 07-23 14:03; older larger navbar 8.6 KB).
(An earlier note claimed the nested copy had the newer homepage/navbar — that was wrong, a
file-listing sort mixup.)

**DONE — merged into this nested copy and verified (all pages 200, no errors):**
- ✅ Self-hosted fonts for inner pages: copied `Rubik-400/PTSans-400/PTSans-700.woff2` and
  replaced the CDN `<link>`s in `views/layouts/app.blade.php` with `@font-face`
  (Satoshi-Variable was already present). app.blade is now CDN-free for fonts.
- ✅ ~9 extra images copied into `assets/image/`.
- ✅ 12 vertical controllers + views + `$allowed` whitelist entries in `libs/Bootstrap.php`.

- ✅ Newer homepage (160 KB) + trimmed navbar copied in from the outside copy (2026-07-24).
  Verified on `:8001`: homepage 160 KB, navbar trimmed (Home/Verticals/Case Studies), all
  verticals 200. **This nested copy is now the complete, current site** — content-identical
  to the outside copy except (a) this up-to-date `CLAUDE.md` and (b) an inert commented-out
  WhatsApp block in `app.blade.php`.

- ✅ Vertical pages CMS content (2026-07-24): the lite build was missing
  `cms/data/content.json`, so every `Helper::cms()` call fell back to thin hardcoded
  defaults ("data missing"). Copied `cms/data/content.json` (68 KB) from the full site +
  the 10 images it references that lite lacked (9 `image/products/core_poducts/*.png`
  product images + 1 `image/cms/*.avif` for debtcollection). Also **added `avif|webp` to the
  static-file extension regex in `router.php`** (it wasn't serving `.avif`, so
  debtcollection's main image 404'd). All 12 verticals now render real CMS titles/
  descriptions/images. NOTE: `Helper::cms($page,$key,$default)` reads
  `cms/data/content.json` at `[$page]['fields'][$key]['value']` — that file must ship with
  the build or pages show defaults.

- ↩️ "Our Technology Partners" logo reel: a Listen-IQ-style dark restyle was tried
  (white banner removed, `bg-black`, inverted white logos, edge fades) then **reverted at the
  user's request (2026-07-24)** back to the original white banner + colored logos + the
  "We partner with the world's leading technology providers…" description line. The unused
  transparent `inaipi logo.png` / `edaya logo.png` were left in `images/reel logos/`
  (harmless; the markup uses the original `final_inaipi.jpg` / `edaya new.jpg`). Learning: the
  reel logos are opaque white-bg images, so a dark-reel look needs pure-black section bg or
  proper transparent/white logo assets.

**STILL PENDING / OPEN:**
- ⚠️ The homepage `imperium homepage_final/index.html` loads **CDN fonts** (Satoshi via
  Fontshare + Google Material Symbols icons; no `@font-face`). For a fully standalone/
  offline-safe site it should self-host these too (separate task, not yet done).
- The **outside** copy `c:/programming/dev imperium website/imperium-lite/` is now fully
  redundant and safe to delete once the user confirms. Backups of both copies:
  `c:/programming/dev imperium website/imperium-lite-backups/`.
- `:8001` is now served from THIS nested folder.
