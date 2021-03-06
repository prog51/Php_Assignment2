<?php

    $host = '127.0.0.1';
    $db = 'oceandb';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';



    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


    try
    {
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $err)
    {
         echo "Error: " . $err->getMessage();
    }

    require('crud.php');
	require('owner.php');

    $crud = new crud($pdo);
	$owner = new owners($pdo);



?>