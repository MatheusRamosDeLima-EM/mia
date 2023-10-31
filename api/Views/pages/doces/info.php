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
        <?php 
            if ($product->__get('isImageIllustrative')) echo "<figcaption>* Imagem meramente ilustrativa</figcaption>";
        ?>
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title"><?php echo $product->__get('name') ?></h1>
        <p id="product-slogan"><?php echo $product->__get('slogan') ?></p>
        <div id="product-information"><?php echo $product->__get('information') ?></div>
        <div id="product-flavors-and-prices">
            <div id="product-flavors">
                <?php foreach ($product->__get('flavorsAndPrices') as $flavor => $price): ?>
                    <label class="product-flavor" id="product-<?php echo $flavor ?>" for="product-<?php echo $flavor?>-price">$flavor</label>
                <?php endforeach ?>
            </div>
            <div id="product-prices">
                <?php foreach ($product->__get('flavorsAndPrices') as $flavor => $price): ?>
                    <p class="product-price" id="product-<?php echo $flavor ?>-price"><?php echo $price?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>