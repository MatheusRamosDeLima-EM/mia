<?php 
    require_once ('../'.__DIR__).'/Product.php';

    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro',
            5.30,
            'img/brigadeiro.png',
            'O doce mais famoso e o mais querido de todo o Brasil.'
        ),
        'beijinho' => new Product(
            'Beijinho',
            4,
            'img/beijinho.png',
            'Aquele gosto de coco beira mar.'
        ),
        'bolo-de-pote' => new Product(
            'Bolo de pote',
            10.20,
            'img/bolo-de-pote.png',
            'O melhor bolo de pote artesanal.'
        ),
    ];
?>

<?php 
    $url = $_SERVER["REQUEST_URI"];

    function selectDocesPage($url) {
        $url = trim($url, '/');
        if ($url ==='doces') return 'doces-main';
        else if (strpos($url, 'doces/info') === 0) return 'doces-info';
        else return null;
    }

    $pageDoces = selectDocesPage($url);
    
    if ($pageDoces === null) include_once("error.php");
    else include_once("doces/$pageDoces.php");
?>