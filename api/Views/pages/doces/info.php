<?php
    $products = $this->getData()['products'];
    $productId = $this->getData()['productId'];
    $product = $products[$productId];
?>
<section id="product">
    <picture id="product-sect-image">
        <div id="product-image-cnt">
            <img src="/midia/images/products/<?php echo $product->__get('image') ?>" alt="Imagem de <?php echo $product->__get('name') ?>" id="product-image">
        </div>
        <figcaption>* Imagem meramente ilustrativa</figcaption>
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title"><?php echo $product->__get('name') ?></h1>
        <p id="product-slogan"><?php echo $product->__get('slogan') ?></p>
        <div id="product-information"><?php echo $product->__get('information') ?></div>
        <p id="product-price">R$ <?php echo number_format($product->__get('price'), 2, ',', '.') ?></p>
    </div>
</section>