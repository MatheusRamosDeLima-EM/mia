<?php
    $file_products = realpath(dirname(__FILE__) . '/../../products.php');
    include_once $file_products;

    function getProductAttributes(array $products) {
        $productId = $_GET['p'];
        return $products[$productId];
    }

    $product = getProductAttributes($products);
?>

<h1 id="product-title"><?php echo $product->__get('name') ?></h1>
<section id="product-info">
    <div id="product-info-main">
        <img href='<?php echo $product->__get('img') ?>' id="product-img">
        <p id="product-price">R$<?php echo $product->__get('price') ?></p>
    </div>
    <div id="product-info-more">
        <p id="product-description"><?php echo $product->__get('description') ?></p>
    </div>
</section>
<style>
    #product-title {
        font-size: 30px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #product-info {
        margin: 10px auto;
        width: 95%;
    }

    #product-info-main {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
    }

    #product-img {
        width: 500px;
        height: 300px;
    }

    #product-price {
        font-size: 25px;
        color: black;
        background-color: rgb(0, 255, 0);
        padding: 10px;
        border-radius: 10px;
    }

    #product-info-more {
        font-size: 20px;
    }
</style>