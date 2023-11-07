<h1>A doçura que você procura</h1>
<section id="products">
    <?php
        $products = $this->data;
        foreach ($products as $productId => $product) {
            echo "
                <a href='/doces/info/$productId' rel='next' class='product'>
                    <div style='background-image: url(/midia/images/products/{$product->__get('image')});' class='img'></div>
                    <div class='info'>
                        <h2 class='product-title'>{$product->__get('name')}</h2>
                        <p class='product-slogan'>{$product->__get('slogan')}</p>
                    </div>
                </a>
            ";
        }
    ?>
</section>