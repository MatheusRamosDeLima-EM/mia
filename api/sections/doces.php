<?php 
    class Product {
        private string $name;
        private float $price;
        private string $img;
        private string $description;

        public function __construct(string $name, float $price, string $img, string $description) {
            // $this->attr = $attr;
            $this->__set('name', $name);
            $this->__set('price', $price);
            $this->__set('img', $img);
            $this->__set('description', $description);
        }

        public function __get($attr) {
            return $attr? $this->$attr : '';
        }
        
        public function __set($attr, $value) {
            $this->$attr = $value;
        }
    };

    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro', 5.30, 'img/brigadeiro.png', 'O doce mais famoso e o mais querido de todo o Brasil.'
        ),
        'beijinho' => new Product(
            'Beijinho', 4, 'img/beijinho.png', 'Aquele gosto de coco beira mar.'
        ),
        'bolo-de-pote' => new Product(
            'Bolo de pote', 10.20, 'img/bolo-de-pote.png', 'O melhor bolo de pote artesanal.'
        ),
    ];
?>

<?php 
    $uri = $_SERVER['REQUEST_URI'];

    function selectDocesPage(string $uri) {
        $uri = trim($uri, '/');
        if ($uri ==='doces') return 'doces-main';
        else if (strpos($uri, 'doces/info?p=') === 0) return 'doces-info';
        else return null;
    }

    $pageDoces = selectDocesPage($uri);
    
    if (!$pageDoces) include_once('error.php');
    else include_once("doces/$pageDoces.php");
?>