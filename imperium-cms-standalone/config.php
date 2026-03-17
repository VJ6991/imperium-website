<?php
// Absolute path to the main website directory where data and images will be saved
define('WEBSITE_ROOT', 'C:/programming/dev imperium website/4-cms_imperiumwebsite-release - Copy - Copy');
define('DATA_FILE', WEBSITE_ROOT . '/cms/data/content.json'); 
define('BLOGS_FILE', WEBSITE_ROOT . '/cms/data/blogs.json'); 
define('VERTICALS_FILE', WEBSITE_ROOT . '/cms/data/verticals.json'); 
define('PRODUCTS_FILE', WEBSITE_ROOT . '/cms/data/products.json'); 
define('CASESTUDIES_FILE', WEBSITE_ROOT . '/cms/data/casestudies.json'); 
define('IMAGE_UPLOAD_DIR', WEBSITE_ROOT . '/assets/image/cms/');
define('PDF_UPLOAD_DIR', WEBSITE_ROOT . '/assets/pdf/cms/');
define('WEBSITE_URL', 'http://localhost:8000');

function cms_asset($path) {
    if (empty($path)) return '';
    if (strpos($path, 'http') === 0) return $path;
    $clean_path = ltrim($path, '/');
    if (strpos($clean_path, 'assets/') === 0) {
        return WEBSITE_URL . '/' . $clean_path;
    }
    return WEBSITE_URL . '/assets/' . $clean_path;
}
?>
