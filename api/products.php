<?php
    include_once "Product.php";
    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro', 5.30, 'img/brigadeiro.png', 'O doce mais famoso e querido do Brasil.'
        ),
        'beijinho' => new Product(
            'Beijinho', 4, 'img/beijinho.png', 'Aquele gosto de coco beira mar.'
        ),
        'bolo-de-pote' => new Product(
            'Bolo de pote', 10.20, 'img/bolo-de-pote.png', 'O melhor bolo de pote artesanal.'
        ),
        'cupcake' => new Product(
            'Cupcake', 8.45, 'img/cupcake.png', 'Um dos melhores cupcakes da região'
        ),
    ];
?>