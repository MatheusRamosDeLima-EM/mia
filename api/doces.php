<?php
    $uri = trim($_SERVER['REQUEST_URI'], '/');

    include_once 'products.php';

    function verifyUriWithProducts(array $products, string $uri) {
        foreach ($products as $product => $product_info) {
            if ($uri === "doces/$product") return $product_info;
        }
        return false;
    }
    
    if ($uri === 'doces') include_once 'pages/sections/doces/main.php';
    else if (strpos($uri, 'doces/') === 0 && verifyUriWithProducts($products, $uri)) include_once 'pages/sections/doces/info.php';
    else include_once 'pages/error.php';
?>