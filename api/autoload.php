<?php 
    spl_autoload_register(function ($file_name) {
        $root = $_SERVER['DOCUMENT_ROOT'].'/api';
        if (file_exists("$root/Controllers/$file_name.php")) {
            require "$root/Controllers/$file_name.php";
        } else if (file_exists("$root/Core/$file_name.php")) {
            require "$root/Core/$file_name.php";
        } else if (file_exists("$root/Models/$file_name.php")) {
            require "$root/Models/$file_name.php";
        }
    })
?>