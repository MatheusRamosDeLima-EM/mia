<?php
    $products = $this->getData()['products'];
    $productId = $this->getData()['productId'];
    $product = $products[$productId];
?>
<section id="product">
    <picture id="product-sect-image">
        <div id="product-image-cnt">
            <img src="/midia/images/products/<?php echo $product->__get('image') ?>" alt="Imagem de <?php echo $product->__get('name') ?>" id="product-image">
        </div>
        <?php 
            if ($product->__get('isImageIllustrative')) echo "<figcaption>* Imagem meramente ilustrativa</figcaption>";
        ?>
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title"><?php echo $product->__get('name') ?></h1>
        <p id="product-slogan"><?php echo $product->__get('slogan') ?></p>
        <div id="product-information"><?php echo $product->__get('information') ?></div>
        <table>
            <thead>
                <tr>
                    <th>Sabor</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($product->__get('flavorsAndPrices') as $flavor => $price): ?>
                        <td id="product-flavors-and-prices">
                            <div class="product-flavor"><?php echo $flavor ?><td>
                            <div class="product-price">R$ <?php echo number_format($price, 2, ",", ".") ?></div>
                        </td>
                    <?php endforeach ?>
                </tr>
            </tbody>
        </table>
    </div>
</section>