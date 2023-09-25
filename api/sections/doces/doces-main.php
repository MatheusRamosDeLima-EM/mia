<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php
        print_r(json_decode(file_get_contents("products.json")));
        var_dump(json_decode(file_get_contents("products.json")));
        $products = json_decode(file_get_contents("products.json"));
        print_r($products);
        var_dump($products);
        foreach ($products as $p => $info) {
            echo "
                <a href='doces/info?product=$p' class='product'>
                    <img src='{$info->img}'>
                    <div class='info'>
                        <h2 class='product-title'>{$info->name}</h2>
                        <p class='product-description'>{$info->description}</p>
                    </div>
                </a>
            ";
        }
    ?>
</section>

<style>
    #products {
        display: grid;
        grid-template-columns: 200px;
        gap: 100px;
    	width: 200px;
        margin: 20px auto;
    }

    .product {
        width: 200px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        border: 1px solid black;
    }

    .product img {
        width: 100%;
        height: 190px;
    }

    .product .info {
        width: 100%;
        height: 110px;
        margin: auto;
        gap: 5px;
    }

    .product-title {
        font-size: 25px;
    }

    .product-price {
        font-size: 20px;
    }

    .product-description {
        font-size: 16px;
    }

    @media only screen and (min-width: 600px) {
        #products {
            grid-template-columns: 200px 200px;
            gap: 100px;
            width: 500px;
        }
    }

    @media only screen and (min-width: 900px) {
        #products {
            grid-template-columns: 200px 200px 200px;
            gap: 100px;
            width: 800px;
        }
    }
</style>