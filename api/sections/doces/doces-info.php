<?php
    function verifyGetP($products, $productId) {
        foreach ($products as $productsId => $productsAttr) {
            if ($productsId === $productId) return true;
        }
        return false;
    }

    function getProductAttributes($products) {
        $productId = $_GET['p'];
        return $products[$productId];
    }

    if (verifyGetP($products, $_GET['p'])) {
        $product = getProductAttributes($products);
        $pageInfo = "
            <h1>{$product->__get('name')}</h1>
            <section style='margin: 10px auto; width: fit-content'>
                <img href='{$product->__get('img')}' style='width: 500px; height: 300px;'>
                <p>{$product->__get('description')}</p>
                <p>R$ {$product->__get('price')}</p>
            </section>
        ";
        echo $pageInfo;
    } else {
        $dir_atual = dirname(__FILE__);
        $arquivo_error = realpath($dir_atual . '/../error.php');
        include_once($arquivo_error);
    }
?>