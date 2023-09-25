<?php 
    $url = $_SERVER["REQUEST_URI"];
    function selectDocesPage($url) {
        $url = trim($url, '/');
        if ($url ==='doces') return 'doces-main';
        else if (strpos($url, 'doces/info') === 0) return 'doces-info';
        else return null;
    }
    $pageDoces = selectDocesPage($url);
?>

<?php
    if ($pageDoces === null) include_once("error.php");
    else include_once("doces/$pageDoces.php");
?>

<?php 
    class Product {
        public string $name;
        public float $price;
        public string $description;
        public string $image;
        public function __construct(string $name, float $price, string $description, string $image) {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->image = $image;
        }
    };

    global $products;
    $products = [
        "brigadeiro" => new Product (
            'Brigadeiro',
            5.3,
            'O doce mais famoso e o mais querido de todo o Brasil.',
            'img/brigadeiro.png',
        ),
        "beijinho"=> new Product (
            "Beijinho",
            4,
            "Aquele gosto de coco beira mar.",
            "img/beijinho.png",
        ),
        "bolo-de-pote"=> [
            "Bolo de pote",
            10.2,
            "O melhor bolo de pote artesanal.",
            "img/bolo-de-pote.png",
        ]
    ];
?>