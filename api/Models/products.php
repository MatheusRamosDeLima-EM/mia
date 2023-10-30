<?php
    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro',
            'O doce que é paixão nacional',
            ['Tradicional' => 3, 'Leite ninho' => 4],
            'brigadeiro.jpg',
            true,
            '<p>Doce tradicional brasileiro feito com chocolate, leite condensado e manteiga. É o preferido de muitos, com seu sabor doce e cremoso.</p>'
        ),
        'palha-italiana' => new Product(
            'Palha italiana',
            'O crocante que é irresistível',
            ['Tradicional' => 3 , 'Leite ninho com Oreo' => 4],
            'palha-italiana.jpg',
            false,
            '<p>Doce feito com biscoito, chocolate e leite condensado. É crocante e chocolatudo, com sabor irresistível.</p>'
        ),
        'bombom' => new Product(
            'Bombom',
            'O doce clássico que não pode faltar',
            ['Chocolate' => 3.5],
            'bombom.jpg',
            true,
            '<p>Doce feito com biscoito, chocolate e leite condensado. É crocante e chocolatudo, com sabor irresistível.</p>'
        )
    ];
?>