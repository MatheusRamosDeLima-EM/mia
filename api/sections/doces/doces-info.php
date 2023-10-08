<?php
    $file_products = realpath($dir_atual . '/../../products.php');
    include_once $file_products;

    function getProductAttributes(array $products) {
        $productId = $_GET['p'];
        return $products[$productId];
    }

    $product = getProductAttributes($products);
?>

<h1><?php echo $product->__get('name') ?></h1>
<section style='margin: 10px auto; width: fit-content'>
    <img href='<?php echo $product->__get('img') ?>' style='width: 500px; height: 300px;'>
    <p><?php echo $product->__get('description') ?></p>
    <p>R$ <?php echo $product->__get('price') ?></p>
</section>