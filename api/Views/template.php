<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css" async>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" async>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" async>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/pages/<?php echo $this->getStyle() ?>.css" async>
    <script src="/assets/js/index.js" defer></script>
    <?php if ($this->getScript()): ?>
        <script src="/assets/js/<?php echo $this->getScript()?>.js" defer></script>
    <?php endif ?>
    <title><?php echo $this->getTitle() ?></title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <div id="menu-button" onclick="menuMobileEnable()">
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
    <main>
        <?php
            $this->loadViewOnTemplate($view_name, $model_data);
        ?>
    </main>
    <footer>
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
    <section id="dark-background" onclick="menuMobileDisable()"></section>
</body>
</html>