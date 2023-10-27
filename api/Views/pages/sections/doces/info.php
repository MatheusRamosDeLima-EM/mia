<?php
    $products = $this->getData()['products'];
    $productId = $this->getData()['productId'];
    $product = $products[$productId];
?>
<section id="product">
    <picture id="product-sect-image">
        <div id="product-image-cnt">
            <img src="/midia/images/products/<?php echo $product->__get('image') ?>" id="product-image">
        </div>
        <figcaption>* Imagem meramente ilustrativa</figcaption>
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title"><?php echo $product->__get('name')?></h1>
        <p id="product-description"><?php echo $product->__get('description') ?></p>
        <p id="product-price">R$ <?php echo number_format($product->__get('price'), 2, ',', '.') ?></p>
    </div>
</section>