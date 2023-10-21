<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php
        $products = $this->data;
        foreach ($products as $productId => $product) {
            echo "
                <a href='/doces/info/$productId' class='product'>
                    <div style='background-image: url(/midia/images/products/{$product->__get('image')});' class='img'></div>
                    <div class='info'>
                        <h2 class='product-title'>{$product->__get('name')}</h2>
                        <p class='product-description'>{$product->__get('description')}</p>
                    </div>
                </a>
            ";
        }
    ?>
</section>
