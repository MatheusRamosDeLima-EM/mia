<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php
        foreach ($products as $p => $info) {
            echo "
                <a href='doces/info?p=$p' class='product'>
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
        --product-width: 200px;
    }
    #products {
        display: grid;
        grid-template-columns: var(--product-width);
        gap: 100px;
    	width: var(--product-width);
        margin: 20px auto;
    }

    @media only screen and (min-width: 600px) {
        #products {
            grid-template-columns: var(--product-width) var(--product-width);
            gap: 100px;
            width: 500px;
        }
    }

    @media only screen and (min-width: 900px) {
        #products {
            grid-template-columns: var(--product-width) var(--product-width) var(--product-width);
            gap: 100px;
            width: 800px;
        }
    }

    .product {
        width: var(--product-width);
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        border: 1px solid black;
        color: black;
        text-decoration: none;
    }

    .product .img {
        width: 100%;
        height: 190px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .product .info {
        width: 95%;
        height: 110px;
        margin: auto;
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