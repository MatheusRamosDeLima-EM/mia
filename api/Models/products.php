<?php
    $products = [
        'brigadeiro' => new Product(
            'Brigadeiro',
            'O doce que é paixão nacional',
            ['Mixed' => 10, 'Chocolate' => 10],
            'brigadeiro.jpg',
            true,
            '<p>O doce tradicional brasileiro agora com mais sabores e possibilidades. Mais do que um simples brigadeiro, uma explosão de emoções. É o preferido de muitos, com seu sabor doce e cremoso.</p>
            <p>A compra acompanha <strong>três brigadeiros</strong>(de chocolate ou coco) por <strong>palito</strong></p>'
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
            'A sobremesa perfeita para celebrar',
            ['Chocolate' => 12, 'Baunilha' => 11.5],
            'bolo.jpg',
            true,
            '<p>Bolo caseiro feito com ingredientes de qualidade e extremo cuidado com o sabor e textura. Fará você ter experiências surreais. Bolo saboroso e fofinho, ideal para aproveitar em diversos momentos e com companhia.</p>'
        ),
        'biscoitos' => new Product (
            'Biscoitos',
            'O lanche perfeito para qualquer momento',
            ['Clássico' => 6, 'Chocolate' => 6.5, 'Baunilha' => 6.5],
            'biscoitos.jpg',
            true,
            '<p>Biscoitos são uma das sobremesas mais populares do mundo. Eles são feitos com ingredientes simples, mas são deliciosos e versáteis.</p>
            <p>Nossos biscoitos são feitos com ingredientes de alta qualidade e são cuidadosamente assados para garantir o melhor sabor.</p>
            <p>A compra acompanha um pacote com 100g de biscoitos de um dos sabores disponíveis!</p>'
        )
    ];
?>