<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php
        $dir_atual = dirname(__FILE__);
        $arquivo_products = realpath($dir_atual . '/../../products.php');
        include_once($arquivo_products);
        
        foreach ($products as $p => $info) {
            echo "
                <a href='/doces/info?p=$p' class='product'>
                    <div style='background-image: url({$info->__get('img')});' class='img'></div>
                    <div class='info'>
                        <h2 class='product-title'>{$info->__get('name')}</h2>
                        <p class='product-description'>{$info->__get('description')}</p>
                    </div>
                </a>
            ";
        }
    ?>
</section>

<style>
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