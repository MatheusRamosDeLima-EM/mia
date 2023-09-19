<?php 
    $paginas = [
        'home' => '<h1>Página home, seja bem vindo</h1>',
        'doces' => '<h1>Página dos doces, escolha o que você desejar</h1>',
        'error' => '<h1>Erro 404</h1>'
    ];
?>

<?php
    // $getParamethers = configurateGet($_GET);
    
    // function configurateGet($get) {
    //     if (homeCase($get)) $get['page'] = 'home';
    //     return $get;
    // }

    // function homeCase($get) {
    //     return $get == [] || $get['page'] == '' || $get['page'] == 'home';
    // }
    $url  = $_SERVER["REQUEST_URI"];
    function selectPage($url) {
        if ($url == ('/index.php' || `/index.php/` || '/')) {
            return 'home';
        } else if ($url == ('/index.php/doces' || '/index.php/doces/')) {
            return 'doces';
        } else {
            return 'error';
        }
    }

    $page = selectPage($url);
    $pageContent = $paginas[$page];
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
                foreach ($paginas as $linkName => $value) {
                    $link = $linkName;
                    if ($link == 'home') echo "<a href='/'>$linkName</a>";
                    else if ($link == 'error') echo "";
                    else echo "<a href='index.php/$link'>$linkName</a>";
                }
            ?>
        </nav>
    </header>
    <main>
        <?php
            echo $pageContent;
            echo $_SERVER["REQUEST_URI"];
        ?>
    </main>
    <footer>
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
</body>
</html>