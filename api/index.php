<?php
    $sections = ['home', 'doces', 'sobre', 'contato'];
    $uri = trim($_SERVER['REQUEST_URI'], '/');
?>

<?php
    function selectPage(string $uri, array $sections) {
        if (strpos($uri, 'doces') === 0) return 'doces.php';
        else {
            if ($uri === '') return 'pages/sections/home.php';
            else {
                foreach ($sections as $section) {
                    if ($uri === $section) return "pages/sections/$section.php";
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

        /* Root */
        :root {
            /* Measures */
            --header-height: 60px;
            --footer-height: 45px;

            /* Colors */
            --background-color: white;
            --gray-color: #f0f0f0;
            --pink-color: #d16074;
            --yellow-color: #ffff97;
        }

        /* Header */
        header {
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;

            background-color: var(--background-color);
            box-shadow: 3px 0 3px 3px rgba(0, 0, 0, 0.363);
            padding-inline: 8px;
            width: 100%;
            height: var(--header-height);
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
            justify-content: center;
            gap: 0;
            position: absolute;
            left: 0;
            top: var(--header-height);
            width: 60vw;
            height: calc(100vh - var(--header-height));
            background-color: var(--background-color);
            box-shadow: 3px 3px 3px 0 rgba(0, 0, 0, 0.363);
            z-index: 1;
        }

        #menu-list.active {
            display: flex;
        }

        #menu-list li {
            width: 100%;
        }

        #menu-list a {
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 14px;
            font-weight: 700;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc((100vh - var(--header-height)) / 4);
        }

        @media only screen and (min-width: 650px) {
            :root {
                --header-height: 120px;
            }

            header {
                flex-direction: column;
                justify-content: center;
                gap: 10px;
                padding-inline: 16px;
            }

            header h1 {
                margin: 0;
            }

            header nav {
                border-top: 1px solid #f0f0f0;
            }

            #menu-button {
                display: none;
            }

            #menu-list {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                position: static;
                width: fit-content;
                height: 45px;
                box-shadow: 0 0 0 0;
            }

            #menu-list a {
                padding: 10px 50px;
                height: fit-content;
            }
        }
        
        /* Main */
        main {
            margin-top: var(--header-height);
            min-height: calc(100vh - var(--header-height) - var(--footer-height));
        }

        main h1 {
            text-align: center;
            padding: 20px;
        }

        /* Footer */
        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-color: var(--background-color);
            box-shadow: 3px 0 3px 3px rgba(0, 0, 0, 0.363);
            width: 100%;
            height: var(--footer-height);
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