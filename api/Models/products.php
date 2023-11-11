<?php
    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro',
            'O doce que é paixão nacional',
            ['Tradicional' => 10, 'Beijinho' => 10],
            'brigadeiro2.jpg',
            true,
            '<p>O doce tradicional brasileiro agora com mais sabores e possibilidades. Mais do que um simples brigadeiro, uma explosão de emoções. É o preferido de muitos, com seu sabor doce e cremoso.</p>'
        ),
        'palha-italiana' => new Product(
            'Palha italiana',
            'O crocante que é irresistível',
            ['Tradicional' => 3 , 'Leite ninho com Oreo' => 4],
            'palha-italiana.jpeg',
            false,
            '<p>Doce feito com biscoito, chocolate e leite condensado. Possui duas principais versões, uma mais saborosa que a outra. É crocante e chocolatudo, com sabor irresistível.</p>'
        ),
        'bolo' => new Product(
            'Bolo',
            'O bolo cremoso e saboroso',
            ['Chocolate' => 5.5],
            'bolo.jpg',
            true,
            '<p>Bolo caseiro feito com ingredientes de qualidade e extremo cuidado com o sabor e textura. Fará você ter experiências surreais. Bolo saboroso e fofinho, ideal para aproveitar em diversos momentos e com companhia.</p>'
        )
    ];
?>