<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// This file is a fresh move to bypass any aggressive OPCache on the previous filename.
// Path check: we are in root/cx/ which is root/imperium-cx/cx/cx/
require_once __DIR__ . '/../../../imperium-cms-standalone/config.php';

$partnerships_file = PARTNERSHIPS_FILE;

if (file_exists($partnerships_file)) {
    echo file_get_contents($partnerships_file);
} else {
    echo json_encode([]);
}
?>
