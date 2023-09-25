<?php 
    function getProductAttributes($products) {
        $product = $_GET['p'];
        $productAttributes = $products->$product;
        return $productAttributes;
    }

    $product = getProductAttributes($products);
    echo "<h1>{$product->name}</h1>";
    echo "<img href='{$product->img}'>";
    echo "<p>{$product->description}</p>";
    echo "<p>{$product->price}</p>";
?>