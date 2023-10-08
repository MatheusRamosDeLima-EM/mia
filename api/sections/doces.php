<?php
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    if ($uri ==='doces') include_once 'doces/doces-main.php';
    else if (strpos($uri, 'doces/info?p=') === 0) {
        $file_products = realpath(dirname(__FILE__) . '/../products.php');
        include_once $file_products;

        function verifyGetP(array $products, string $productId) {
            foreach ($products as $productsId => $productsAttr) {
                if ($productsId === $productId) return true;
            }
            return false;
        }

        if (verifyGetP($products, $_GET['p'])) include_once 'doces/doces-info.php';
        else include_once 'error.php';
    } else include_once 'error.php';
?>