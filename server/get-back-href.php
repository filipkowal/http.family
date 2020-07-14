<?php

$productName = isset($_GET['productName']) ? $_GET['productName'] : getNameFromUri();

function getNameFromUri() {
    $uri = $_SERVER['REQUEST_URI'];
    $start = strpos($uri, "?") + 1;
    $nameFromUri = strpos($uri, "?") > 0 ? substr($uri, $start) : "";
    return $nameFromUri;
}

$productDescription = "";
function getProductDescription($productDescription, $productName) {
    if (isset($_GET['productName'])) {
        foreach($_GET as $key => $value) {
            if ($value) {
                $productDescription .= $key.": ".$value."\n";
            }
        }
    }
    $productDescription = $productDescription !== "" ? $productDescription : $productName;
    return $productDescription;
}
$productDescription = getProductDescription($productDescription, $productName);

function getBackHref($productName) {
    return $productName && ($productName !== "piece") && ($productName !== "e-commerce") ? $productName.".php" : "pricing.php";
}

$backHref = getBackHref($productName);
?>