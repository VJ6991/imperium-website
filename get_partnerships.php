<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'imperium-cms-standalone/config.php';

$partnerships_file = PARTNERSHIPS_FILE;

if (file_exists($partnerships_file)) {
    echo file_get_contents($partnerships_file);
} else {
    echo json_encode([]);
}
?>
