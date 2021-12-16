<?php

    $user = "root";
    $pass = "mariadb";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
    ];
    $dbh = new PDO('mysql:host=localhost; dbname=kyuukyuu', $user, $pass, $opt);
    
$sql = "INSERT INTO member (id, name, pass) VALUES(NULL, '斎藤','111')";