<?php 
    $pages = [
        'home' => '<h1>Página home, seja bem vindo</h1>',
        'doces' => '<h1>Página dos doces, escolha o que você desejar</h1>',
        'error' => '<h1>Erro 404</h1>'
    ];
?>

<?php
    $url  = $_SERVER["REQUEST_URI"];
    function selectPage($url) {
        $url = trim($url, '/');
    
        if ($url == '' || $url == 'index.php') {
            return 'home';
        } else if ($url == 'doces' || $url == 'index.php/doces') {
            return 'doces';
        } else {
            return 'error';
        }
    }

    $page = selectPage($url);
    $pageContent = $pages[$page];
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
                foreach ($pages as $linkName => $value) {
                    $link = $linkName;
                    if ($link == 'home') echo "<a href='/'>$linkName</a>";
                    else if ($link == 'error') echo "";
                    else echo "<a href='/$link'>$linkName</a>";
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