<?php 
    class Product {
        public string $name;
        public float $price;
        public string $img;
        public string $description;
        public function __construct(string $name, float $price, string $img, string $description) {
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
            $this->description = $description;
        }
    };

    $brigadeiro = new Product('Brigadeiro', 5.30, 'img/brigadeiro.png', 'O doce mais famoso e o mais querido de todo o Brasil.');
    $beijinho = new Product('Beijinho', 4, 'img/beijinho.png', '');
    $bolodepote = new Product('Bolo de pote', 10.20, 'img/bolodepote.png', 'O melhor bolo de pote');

    $products = [
        'brigadeiro' => $brigadeiro,
        'beijinho' => $beijinho,
        'bolodepote' => $bolodepote,
    ];

    $jsonProducts = json_encode($products);
    file_put_contents("products.json", $jsonProducts);
?>

<?php 
    $url = $_SERVER["REQUEST_URI"];
    function selectDocesPage($url) {
        $url = trim($url, '/');
        if ($url ==='programas/mia/index.php/doces') return 'doces-main';
        else if (strpos($url, 'programas/mia/index.php/doces/info') === 0) return 'doces-info';
    }
    $pageDoces = selectDocesPage($url);
?>

<?php include_once("sections/doces/$pageDoces.php"); ?>