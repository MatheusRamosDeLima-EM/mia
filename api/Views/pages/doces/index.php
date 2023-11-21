<?php $products = $this->getData() ?>
<h1>A doçura que você procura</h1>
<section id="products">
    <?php foreach ($products as $productId => $product): ?>
        <a href="/doces/info/<?php echo $productId ?>" rel="next" class="product">
            <div style="background-image: url(/midia/images/products/<?php echo $product->__get('image') ?>" class="img"></div>
            <div class="info">
                <h2 class="product-title"><?php echo $product->__get('name') ?></h2>
                <p class="product-slogan"><?php echo $product->__get('slogan') ?></p>
            </div>
        </a>
    <?php endforeach ?>
</section>