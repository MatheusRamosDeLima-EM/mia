<?php 
    $uri = $_SERVER['REQUEST_URI'];

    function selectDocesPage(string $uri) {
        $uri = trim($uri, '/');
        if ($uri ==='doces') return 'doces-main';
        else if (strpos($uri, 'doces/info?p=') === 0) return 'doces-info';
        else return null;
    }

    $pageDoces = selectDocesPage($uri);
    
    if (!$pageDoces) include_once('error.php');
    else include_once("doces/$pageDoces.php");
?>