<?php
    $sections = ['home', 'doces', 'sobre', 'contato'];
?>

<?php
    $uri = $_SERVER['REQUEST_URI'];
    function selectPage(string $uri, array $sections) {
        $uri = trim($uri, '/');
        
        if ($uri === 'doces' || strpos($uri, 'doces/') === 0) return 'doces.php';
        else {
            if ($uri === '') return 'pages/sections/home.php';
            else {
                foreach ($sections as $currentlyPage) {
                    if ($uri === $currentlyPage) return "pages/sections/$currentlyPage.php";
                }
                return 'pages/error.php';
            }
        }
    }

    $page = selectPage($uri, $sections);
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

        /* Fonts import */
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

        /* Header */
        header {
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;

            background-color: #f0f0f0;
            box-shadow: 3px 0 3px 3px rgba(0, 0, 0, 0.363);
            width: 100%;
            height: 64px;
        }

        header h1 {
            width: fit-content;
            margin: 0 auto;
        }

        #menu-button {
            color: black;
            font-size: 16px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            margin: 5px;
        }

        #menu-list {
            list-style-type: none;
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            gap: 0;
            position: absolute;
            left: 0;
            top: 64px;
            width: 60vw;
            height: calc(100vh - 64px);
            background-color: #f0f0f0;
            box-shadow: 3px 3px 3px 0 rgba(0, 0, 0, 0.363);
            z-index: 1;
        }

        #menu-list.active {
            display: flex;
        }

        #menu-list a {
            padding: 30px 100px;
            text-decoration: none;
            color: black;
            font-family: 'Roboto Condensed', sans-serif;
        }
        
        @media only screen and (min-width: 550px) {
            header {
                flex-direction: row;
                justify-content: space-around;
            }

            header h1 {
                margin: 0;
            }

            #menu-button {
                display: none;
            }

            #menu-list {
                display: flex;
                flex-direction: row;
                justify-content: center;
                gap: 25px;
                position: static;
                width: fit-content;
                height: fit-content;
                box-shadow: 0 0 0 0;
            }

            #menu-list a {
                padding: 10px;
            }
        }

        /* Main */
        main {
            margin-top: 64px;
            min-height: calc(100vh - 2 * 64px);
        }

        main h1 {
            text-align: center;
            padding: 20px;
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #f0f0f0;
            box-shadow: 3px 0 3px 3px rgba(0, 0, 0, 0.363);
            width: 100%;
            height: 64px;
        }
    </style>
    <title>MIA - Loja de doces</title>
</head>
<body>
    <header>
        <h1>MIA</h1>
        <nav>
            <div id="menu-button">PHP</div>
            <ul id="menu-list">
                <?php 
                    foreach ($sections as $link) {
                        $linkName = strtoupper($link);
                        if ($link === 'home') echo "<li><a href='/'>$linkName</a></li>";
                        else echo "<li><a href='/$link'>$linkName</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            include_once $page;
        ?>
    </main>
    <footer>
        <p>&COPY; MatheusRamosDeLima 2023</p>
    </footer>
    <script>
        // Menu
        const menuButton = document.querySelector('#menu-button');
        const menuList = document.querySelector('#menu-list');
        menuButton.addEventListener('click', () => {
            menuList.classList.toggle('active');
        })
    </script>
</body>
</html>