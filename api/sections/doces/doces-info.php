<?php
    function getProductAttributes($products) {
        $product = $_GET['product'];
        return $products[$product];
    }

    $product = getProductAttributes($products);
    echo "<h1>{$product->name}</h1>";
    echo "<img href='{$product->img}'>";
    echo "<p>{$product->description}</p>";
    echo "<p>R$ {$product->price}</p>";
?>