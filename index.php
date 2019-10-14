<?php
    require 'header.php';

    if(isset($_GET['page'])) {
        $file = 'pages/'.$_GET['page'].'.php';
        if(file_exists($file)) {
            require $file;
        } else {
            require '404.php';
        }
    } else {
        require 'pages/home.php';
    }

    require 'footer.php';
?>