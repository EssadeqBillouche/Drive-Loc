<?php
namespace classes;

use mysql_xdevapi\Exception;

class car{
    private $carName;
    private $carPrice;
    private $carImage;
    private $carBrand;
    private $carModel;
    private $carAvailability;
    private $carGearBox;
    private $carMileage;
    private $carCategory;

    public function addCar($carName, $carPrice, $carImage, $carBrand, $carModel, $carAvailability){
        $db = dbConnaction::getConnection();
        try {
            $stmnt = $db->prepare("Insert into car (car_brand,car_category,car_image,car_price_per_day,car_availability,model,GearBox,mileage) values (:name, :price, :image, :category, :model)");
            $stmnt->bindValue(':name', $this->name);
            $stmnt->bindValue(':price', $this->price);
            $stmnt->bindValue(':image', $this->image);
            $stmnt->bindValue(':category', $this->category);
            $stmnt->bindValue(':model', $this->model);
            $stmnt->execute();
        }catch (Exception $e){
            echo "prob in add car ". $e->getMessage();
        }

    }

}



?>