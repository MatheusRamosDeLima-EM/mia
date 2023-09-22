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

    $brigadeiro = new Product('Brigadeiro', '5,30', 'img/brigadeiro.png', $description);
    $beijinho = new Product('Beijinho', '4,70', 'img/beijinho.png', $description);

    $products = [
        'brigadeiro' => $brigadeiro,
        'beijinho' => $beijinho,
    ];
?>

<h1>Escolha o doce!</h1>
<section id="search">
    
</section>
<section id="products">
    <?php 
        foreach ($products as $p => $info) {
            echo "
                <div id='$p'>
                    <img src='{$info->img}'>
                    <h2>{$info->name}</h2>
                    <p>{$info->price}</p>
                    <p>{$info->description}</p>
                </div>
            ";
        }
    ?>
</section>