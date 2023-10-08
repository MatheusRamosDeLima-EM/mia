<?php
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    if ($uri ==='doces') include_once 'sections/doces/doces-main.php';
    else if (strpos($uri, 'doces/info?p=') === 0) {
        include_once 'products.php';

        function verifyGetP(array $products, string $productId) {
            foreach ($products as $productsId => $productsAttr) {
                if ($productsId === $productId) return true;
            }
            return false;
        }

        if (verifyGetP($products, $_GET['p'])) include_once 'sections/doces/doces-info.php';
        else include_once 'sections/error.php';
    } else include_once 'sections/error.php';
?>