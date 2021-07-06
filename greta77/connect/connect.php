<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'mysql:dbname=greta_lognes_77;host=127.0.0.1;charset=utf8'; 
$user = 'root';
$password = '';


$pdo= new PDO($dsn,$user,$password);


$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //Récupération associatif par défaut
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);		// Debug Requêtes