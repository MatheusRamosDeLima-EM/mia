<?php 
    spl_autoload_register(function ($file_name) {
        if (file_exists("Controllers/$file_name.php")) {
            require "Controllers/$file_name.php";
        } else if (file_exists("Core/$file_name.php")) {
            require "Core/$file_name.php";
        } else if (file_exists("Models/$file_name.php")) {
            require "Models/$file_name.php";
        }
    });

    $core = new Core();
?>