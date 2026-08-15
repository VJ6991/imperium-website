<?php
/**
 * Submits every URL in sitemap.xml to the IndexNow API in one bulk POST, so
 * Bing (and everything that reads Bing's index — ChatGPT Search, Copilot,
 * DuckDuckGo, Yahoo) picks up new/changed pages within minutes instead of
 * waiting on its normal crawl schedule. Google does not participate in
 * IndexNow; this has no effect on Google's index.
 *
 * Run from the project root, after regenerating the sitemap:
 *   php tools/generate-sitemap.php
 *   php tools/indexnow-submit.php
 *
 * Requires network access — will not run in a fully offline environment.
 * Safe to re-run: IndexNow is designed for "here's what changed," not a
 * one-shot claim, and submitting the same URL twice is a no-op.
 *
 * KEY: 77b34666e313801d1d9fc85dfebca50d — must match the filename of
 * 77b34666e313801d1d9fc85dfebca50d.txt at the site root (IndexNow verifies
 * ownership by fetching that file and checking its contents equal the key).
 * If the key ever needs to be rotated, generate a new one, add the new
 * <key>.txt file, update it here, and only then delete the old key file.
 */

$root = dirname(__DIR__);
$key  = '77b34666e313801d1d9fc85dfebca50d';
$host = 'www.imperiumapp.com';

$sitemap = $root . '/sitemap.xml';
if (!is_file($sitemap)) {
    fwrite(STDERR, "ERROR: sitemap.xml not found — run tools/generate-sitemap.php first.\n");
    exit(1);
}

$xml = simplexml_load_file($sitemap);
if ($xml === false) {
    fwrite(STDERR, "ERROR: sitemap.xml did not parse as XML.\n");
    exit(1);
}

$urls = [];
foreach ($xml->url as $u) {
    $urls[] = (string) $u->loc;
}

if (!$urls) {
    fwrite(STDERR, "ERROR: sitemap.xml contained no <url> entries.\n");
    exit(1);
}

$payload = json_encode([
    'host'        => $host,
    'key'         => $key,
    'keyLocation' => "https://{$host}/{$key}.txt",
    'urlList'     => $urls,
], JSON_UNESCAPED_SLASHES);

$ch = curl_init('https://api.indexnow.org/indexnow');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json; charset=utf-8'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,
]);
$response = curl_exec($ch);
$status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error    = curl_error($ch);
curl_close($ch);

if ($error) {
    fwrite(STDERR, "ERROR: request failed — {$error}\n");
    exit(1);
}

// IndexNow returns 200 (submitted) or 202 (accepted, key not yet verified —
// normal on the very first submission before the key file has propagated).
echo "IndexNow submission: HTTP {$status}, " . count($urls) . " URLs (" . $host . ")\n";
if ($status !== 200 && $status !== 202) {
    fwrite(STDERR, "Response body: {$response}\n");
    exit(1);
}
