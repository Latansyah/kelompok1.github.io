<?php

//Remote Database Connection
   $host = 'remotemysql.com';
   $db = '46LiVaQ1Zg';
   $user = '46LiVaQ1Zg';
   $pass = 'Njv8VPOJVv';
  $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("admin","password");
?>
© 2021 GitHub, Inc.
