<?php 
    class Product {
        public string $name;
        public string $price;
        public string $img;
        public string $description;
        public function __construct(string $name, string $price, string $img, string $description) {
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
            $this->description = $description;
        }
    };

    $brigadeiro = new Product('Brigadeiro', '5,30', 'img/brigadeiro.png', 'O doce mais famoso e o mais querido de todo o Brasil.');
    $beijinho = new Product('Beijinho', '4,70', 'img/beijinho.png', '');
    $bolodepote = new Product('Bolo de pote', '10,20', 'img/bolodepote.png', 'O melhor bolo de pote');

    $products = [
        'brigadeiro' => $brigadeiro,
        'beijinho' => $beijinho,
        'bolodepote' => $bolodepote,
    ];
?>

<h1 class="page-title">Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php 
        foreach ($products as $p => $info) {
            echo "
                <div id='$p' class='product'>
                    <img src='{$info->img}'>
                    <div class='info'>
                        <h2 class='product-title'>{$info->name}</h2>
                        <p class='product-price'>R$ ".$info->price."</p>
                        <p class='product-description'>{$info->description}</p>
                    </div>
                </div>
            ";
        }
    ?>
</section>

<style>
    #products {
        display: grid;
        grid-template-columns: 200px 200px 200px;
        gap: 100px;
    	width: 800px;
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
</style>