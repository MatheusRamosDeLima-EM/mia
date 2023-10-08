<?php
    $uri = trim($_SERVER['REQUEST_URI'], '/');

    include_once 'products.php';
    
    if ($uri ==='doces') include_once 'pages/sections/doces/doces-main.php';
    else if (strpos($uri, 'doces/info?p=') === 0 && verifyGetP($products, $_GET['p'])) include_once 'pages/sections/doces/doces-info.php';
    else include_once 'pages/error.php';

    function verifyGetP(array $products, string $productId) {
        foreach ($products as $productsId => $productsAttr) {
            if ($productsId === $productId) return true;
        }
        return false;
    }
?>