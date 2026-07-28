<?php
/**
* Error Controller — renders a self-contained 404 for this trimmed 3-page build.
* (The full site redirected to a /not-found controller that isn't shipped here.)
*/
class IMK_Error
{
	function index()
	{
		header('HTTP/1.0 404 Not Found');
		$home = function_exists('url') ? url('') : '/';
		echo '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">'
			. '<meta name="viewport" content="width=device-width, initial-scale=1">'
			. '<meta name="robots" content="noindex">'
			. '<title>Page not found | Imperium</title>'
			. '<style>body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;'
			. 'font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:#0f0f0f;color:#fff;text-align:center}'
			. '.wrap{padding:40px}h1{font-size:72px;margin:0;color:#E9753B}p{font-size:18px;color:#bab6b6}'
			. 'a{display:inline-block;margin-top:20px;padding:12px 28px;background:#E9753B;color:#fff;'
			. 'text-decoration:none;border-radius:6px;font-weight:600}</style></head>'
			. '<body><div class="wrap"><h1>404</h1><p>The page you are looking for isn\'t here.</p>'
			. '<a href="' . htmlspecialchars($home, ENT_QUOTES) . '">Back to Home</a></div></body></html>';
		die;
	}
}
