<?php
    require_once "Product.php";

    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro', 5.30, 'brigadeiro.jpg', 'O doce mais famoso e querido do Brasil.'
        ),
        'beijinho' => new Product(
            'Beijinho', 4, 'beijinho.png', 'Aquele gosto de coco beira mar.'
        ),
        'bolo-de-pote' => new Product(
            'Bolo de pote', 10.20, 'bolo-de-pote.png', 'O melhor bolo de pote artesanal.'
        ),
        'cupcake' => new Product(
            'Cupcake', 8.45, 'cupcake.png', 'Um dos melhores cupcakes da região'
        ),
    ];
?>