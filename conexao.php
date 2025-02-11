<?php

# ligação a base de dados

    $servidor   = 'localhost';
    $utilizador = 'root';
    $password   = '';
    $basedados  = 'ufcd_9952';

    $link = mysqli_connect($servidor, $utilizador, $password, $basedados);

    
    $url = $_SERVER['PHP_SELF'];

?>