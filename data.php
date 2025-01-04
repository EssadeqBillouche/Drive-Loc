

<?php

require 'classes/Autoloader.php';
use classes\Autoloader;
use classes\dbConnaction;
Autoloader::AutoloaderFunction();

$db = dbConnaction::getConnection();

$stem = $db ->prepare("SELECT * FROM car ");
$stem -> execute();
$cars = $stem -> fetchAll(PDO::FETCH_ASSOC);
$cars = json_encode($cars, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $cars;


?>