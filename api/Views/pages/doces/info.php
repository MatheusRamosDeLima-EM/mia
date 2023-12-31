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
        <div id="product-information">
            <div id="see-more-details" onclick="seeMoreDetails()">
                <span>Ver mais detalhes</span>
                <div id="arrow"></div>
            </div>
            <div id="information"><?php echo $product->__get('information') ?></div>
        </div>
        <div id="product-flavors-and-prices">
            <div id="product-flavors">
                <?php foreach ($product->__get('flavorsAndPrices') as $flavor => $price): ?>
                    <button class="product-flavor" data-flavor="<?php echo $flavor?>"><?php echo $flavor ?></button>
                <?php endforeach ?>
            </div>
            <div id="product-prices">
                <?php foreach ($product->__get('flavorsAndPrices') as $flavor => $price): ?>
                    <p class="product-price" data-price="<?php echo $flavor ?>"><?php echo $price ?></p>
                <?php endforeach ?>
            </div>
        </div>
        <a href="/carrinho" id="buy-product">Comprar</a>
    </div>
</section>