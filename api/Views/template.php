<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/pages/<?php echo $this->getStyle() ?>.css">
    <script src="/assets/js/index.js" defer></script>
    <title>MIA - Loja de doces</title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <div id="menu-button">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul id="menu-list">
                <?php
                    $sections = ['home', 'doces', 'sobre', 'contato'];
                    foreach ($sections as $link) {
                        $linkName = ucfirst($link);
                        if ($link === 'home') echo "<li><a href='/' id='home'>$linkName</a></li>";
                        else echo "<li><a href='/$link' id='$link'>$linkName</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main onclick="leaveMenuMobile()">
        <?php
            $this->loadViewOnTemplate($view_name, $model_data);
        ?>
    </main>
    <footer onclick="leaveMenuMobile()">
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
</body>
</html>