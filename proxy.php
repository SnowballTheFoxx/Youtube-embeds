<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/xml");

$url = $_GET['url'] ?? '';

if (!$url) {
    echo "No URL provided.";
    exit;
}

echo file_get_contents($url);
?>