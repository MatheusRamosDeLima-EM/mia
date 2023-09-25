<?php
    $pages = ['home', 'doces', 'sobre', 'contato', 'error'];
?>

<?php
    $url  = $_SERVER["REQUEST_URI"];
    function selectPage($url, $pages) {
        $url = trim($url, '/');
        
        if ($url == '') return 'home';
        else if (strpos($url, 'doces/') === 0) return 'doces';
        else {
            foreach ($pages as $currentlyPage) {
                if ($url == $currentlyPage) return $currentlyPage;
            }
            return 'error';
        }
    }

    $page = selectPage($url, $pages);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset css */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* Header */
        header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;

            background-color: #f0f0f0;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.363);
            height: 64px;
        }

        #menu-list {
            list-style-type: none;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 30px;
        }

        #menu-list a {
            text-decoration: none;
            color: black;
        }
    </style>
    <title>MIA - Loja de doces</title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <ul id="menu-list">
                <?php 
                    foreach ($pages as $linkName) {
                        $link = $linkName;
                        $linkName = ucfirst($linkName);
                        if ($link == 'home') echo "<li><a href='/'>$linkName</a></li>";
                        else if ($link == 'error') echo "";
                        else echo "<li><a href='/$link'>$linkName</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            include_once("sections/$page.php");
        ?>
    </main>
    <footer>
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
</body>
</html>