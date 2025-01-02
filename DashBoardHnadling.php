<?php
require_once 'classes/Autoloader.php';
use classes\Autoloader;
Autoloader::AutoloaderFunction();

if (isset($_POST['addCarFormMult']))
{
    $carName = $_POST['carName'];
    $carModel = $_POST['carModel'];
    $gearbox = $_POST['gearbox'];
    $mileage = $_POST['mileage'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    foreach ($carName as $index => $cars) {
        var_dump($carName);
        echo "<br>";
    }

}elseif (isset($_POST['addCategory'])){

}elseif (isset($_POST['editReview'])){

}

?>