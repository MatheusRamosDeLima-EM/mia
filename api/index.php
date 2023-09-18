<?php 
    $paginas = [
        'home' => '<h1>Página home, seja bem vindo</h1>',
        'doces' => '<h1>Página dos doces, escolha o que você desejar</h1>'
    ];
?>

<?php
    $getParamethers = configurateGet($_GET);
    $page = $getParamethers['page'];
    $pageContent = $paginas[$page];

    function configurateGet($get) {
        if (homeCase($get)) {
            $get = ['page' => 'home'];
        }
        return $get;
    }

    function homeCase($get) {
        return $get == [] || $get['page'] == '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIA - Loja de doces</title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <?php 
                foreach ($paginas as $link => $value) {
                    echo "<a href='?page=$link'>$link</a>";
                }
            ?>
        </nav>
    </header>
    <main>
        <p>Teste site estático usando php</p>
        <?php
            echo $pageContent;
        ?>
    </main>
    <footer>
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
</body>
</html>