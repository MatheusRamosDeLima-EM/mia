<?php 
    $url = $_SERVER["REQUEST_URI"];
    function selectDocesPage($url) {
        $url = trim($url, '/');
        if ($url ==='doces') return 'doces-main';
        else if (strpos($url, 'doces/info') === 0) return 'doces-info';
        else return null;
    }
    $pageDoces = selectDocesPage($url);
?>

<?php
    if ($pageDoces === null) include_once("error.php");
    else include_once("doces/$pageDoces.php");
?>