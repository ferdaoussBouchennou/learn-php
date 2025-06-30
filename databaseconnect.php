<?php
require_once(__DIR__ . '/config/mysql.php');
try{
$mysqlClient=new PDO(
    'mysql:host=' . MYSQL_HOST . ';port=' . MYSQL_PORT . ';dbname=' . MYSQL_NAME . ';charset=utf8',
    MYSQL_USER,MYSQL_PASSWORD
);
$mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>