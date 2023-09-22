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

    $description = 'O doce mais queridinho do brasil com uma nova fórmula';

    $brigadeiro = new Product('Brigadeiro', '5,30', 'img/brigadeiro.png', 'O doce mais famoso e o mais querido');
    $beijinho = new Product('Beijinho', '4,70', 'img/beijinho.png', 'Aquele coco paradisíaco');
    $bolodepote = new Product('Bolo de pote', '10,20', 'img/bolodepote.png', $description);

    $products = [
        'brigadeiro' => $brigadeiro,
        'beijinho' => $beijinho,
        'bolodepote' => $bolodepote,
    ];
?>

<h1>Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php 
        foreach ($products as $p => $info) {
            echo "
                <div id='$p' class='product'>
                    <img src='{$info->img}'>
                    <div class='info'>
                        <h2 class='productTitle'>{$info->name}</h2>
                        <p class='productPrice'>R$ ".$info->price."</p>
                        <p class='productDescription'>{$info->description}</p>
                    </div>
                </div>
            ";
        }
    ?>
</section>

<style>
    #products {
        display: grid;
        grid-template-columns: calc(100% / 3) calc(100% / 3) calc(100% / 3);
        gap: 50px;
        width: fit-content;
        margin: 20px auto;
    }

    .product {
        width: 200px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        gap: 10px;
        border: 1px solid black;
    }

    .product img {
        width: 100%;
        height: 100%;
        margin: auto;
    }

    .product .info {
        gap: 5px;
    }

    .productTitle {
        font-size: 25px;
    }

    .productPrice {
        font-size: 20px;
    }

    .productDescription {
        font-size: 16px;
    }
</style>