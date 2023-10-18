<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php
        $products = $this->data;
        foreach ($products as $productId => $product) {
            echo "
                <a href='/index.php/doces/info/$productId' class='product'>
                    <div style='background-image: url(../../../imgs/{$product->__get('image')});' class='img'></div>
                    <div class='info'>
                        <h2 class='product-title'>{$product->__get('name')}</h2>
                        <p class='product-description'>{$product->__get('description')}</p>
                    </div>
                </a>
            ";
        }
    ?>
</section>

<style>
    header #doces {
        background-color: var(--gray-color);
        color: var(--pink-color);
    }

    :root {
        --product-width: 325px;
        --product-height: 275px;
        --product-gap: 75px;
    }

    #products {
        display: grid;
        gap: var(--product-gap);
        width: calc(var(--product-width) - 50px);
        margin: 20px auto;
    }

    .product {
        width: calc(var(--product-width) - 50px);
        height: var(--product-height);
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        border: 1px solid black;
        color: black;
        text-decoration: none;
    }
    
    @media only screen and (min-width: 400px) {
        #products {
            gap: var(--product-gap);
            width: var(--product-width);
        }

        .product {
            width: var(--product-width);
        }
    }

    @media only screen and (min-width: 850px) {
        #products {
            grid-template-columns: var(--product-width) var(--product-width);
            width: calc(2 * var(--product-width) + var(--product-gap));
        }
    }


    .product .img {
        width: 100%;
        height: calc(var(--product-height) * 0.7);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    
    .product .info {
        width: 95%;
        height: calc(var(--product-height) * 0.3);
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .product-title {
        font-size: 25px;
        text-align: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .product-price {
        font-size: 20px;
    }

    .product-description {
        font-size: 16px;
    }
</style>