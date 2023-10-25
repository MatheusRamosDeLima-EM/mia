<?php
    $products = $this->getData()['products'];
    $productId = $this->getData()['productId'];
    $product = $products[$productId];
?>
<h1 id="product-title"><?php echo $product->__get('name')?></h1>
<section id="product-info">
    <div id="product-info-image">
        <img src="/midia/images/products/<?php echo $product->__get('image') ?>" id="product-image">
    </div>
    <div id="product-info-text">
        <p id="product-description"><?php echo $product->__get('description') ?></p>
        <p id="product-price">R$ <?php echo number_format($product->__get('price'), 2, ',', '.') ?></p>
    </div>
</section>