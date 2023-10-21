<?php
    $products = $this->getData()['products'];
    $productId = $this->getData()['productId'];
    $product = $products[$productId];
?>
<h1 id="product-title"><?php echo $product->__get('name')?></h1>
<section id="product-info">
    <div id="product-info-main">
        <img src="/midia/images/products/<?php echo $product->__get('image') ?>" id="product-img">
        <p id="product-price">R$<?php echo $product->__get('price') ?></p>
    </div>
    <div id="product-info-more">
        <p id="product-description"><?php echo $product->__get('description') ?></p>
    </div>
</section>