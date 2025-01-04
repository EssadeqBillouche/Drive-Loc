<?php
namespace classes;

use mysql_xdevapi\Exception;

class car{
    private $carName;
    private $carPrice;
    private $carImage;
    private $carModel;
    private $carAvailability;
    private $carGearBox;
    private $carMileage;
    private $availability;
    private $carCategory;

    public function addCar($carName, $carPrice, $carImage, $carModel, $carAvailability, $carGearBox, $carMileage, $carCategory,){
        $db = dbConnaction::getConnection();
        try {
            $stmnt = $db->prepare("Insert into car (car_brand,car_category,car_image,car_price_per_day,car_availability,model,GearBox,mileage) values (:name, :category, :image, :price,:availability, :model, :GearBox, :mileage)");
            $stmnt->bindParam(":name", $carName);
            $stmnt->bindParam(":category", $carCategory);
            $stmnt->bindParam(":price", $carPrice,);
            $stmnt->bindParam(":image", $carImage);
            $stmnt->bindParam(":availability", $carAvailability);
            $stmnt->bindParam(":model", $carModel);
            $stmnt->bindParam(":GearBox", $carGearBox);
            $stmnt->bindParam(":mileage", $carMileage);
            $stmnt->execute();

        }catch (Exception $e){
            echo "prob in add car ". $e->getMessage();
        }

    }
    public function displayAllCars(){
        $db = dbConnaction::getConnection();
        $stmt = $db->prepare("SELECT * FROM car");
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

}



?>