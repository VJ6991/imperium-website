# Commit: Fix React Partnership display and caching issues

## Summary
Resolved an issue where Strategic Partnerships were missing from the React (CX) page due to server-side caching (OPCache) and routing complexities with symlinked directories.

## Modified Files

### Project Root
- [cx/get_partnerships_live.php](file:///c:/programming/dev%20imperium%20website/4-cms_imperiumwebsite-release%20-%20Copy%20-%20Copy/cx/get_partnerships_live.php) [NEW]
- [cx/](file:///c:/programming/dev%20imperium%20website/4-cms_imperiumwebsite-release%20-%20Copy%20-%20Copy/cx/) (Updated with fresh React build)

### React Source (imperium-cx)
- [imperium-cx/src/pages/partnership/Partnership.js](file:///c:/programming/dev%20imperium%20website/4-cms_imperiumwebsite-release%20-%20Copy%20-%20Copy/imperium-cx/src/pages/partnership/Partnership.js)

### Deleted Files
- [get_partnerships.php](file:///c:/programming/dev%20imperium%20website/4-cms_imperiumwebsite-release%20-%20Copy%20-%20Copy/get_partnerships.php)
- [cx/get_partnerships.php](file:///c:/programming/dev%20imperium%20website/4-cms_imperiumwebsite-release%20-%20Copy%20-%20Copy/cx/get_partnerships.php)

## Key Technical Changes
1.  **Cache Busting**: Introduced a new endpoint filename `get_partnerships_live.php` to bypass aggressive PHP OPCache that was serving outdated or failing code.
2.  **Symlink Support**: Adjusted the include path in the API to `../../../` to correctly resolve the CMS configuration through the `root/cx` symlink (which points to `root/imperium-cx/cx/cx`).
3.  **Deployment Cleanup**: Removed redundant API files from the root to ensure all React requests are handled within the `cx/` scope, which is already exempted from the main routing logic.
4.  **Verified Delivery**: Confirmed the new endpoint returns valid JSON and the React frontend correctly renders the partners list.
