<?php

$productName = "";

if (isset($_POST['submit'])) {
    $uri = $_POST['product'];
    $productName = getProductName($uri);
}

function getProductName($uri) {
    $start = strpos($uri, "%2F") + 3;
    $end = strpos(substr($uri, $start), ".php");
    return substr($uri, $start, $end);
}

function getBackHref($productName) {
    return $productName && $productName !== "piece" && $productName !== "e-commerce" ? $productName.".php" : "pricing.html";
}

$productName = getBackHref($productName);
?>