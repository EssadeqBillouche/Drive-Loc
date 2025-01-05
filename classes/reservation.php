<?php
namespace classes;

use PDO;
use PDOException;

class reservation{

    private $id;
    private $userId;
    private $CarID;
    private $reservationName;
    private $email;
    private $startDate;
    private $endDate;
    private $status;
    private $pickupLocation;
    private $dropLocation;
    private $pickupDate;
    private $dropDate;


    public function allResevations()
    {
        $db = dbConnaction::getConnection();
        $query = $db->query("SELECT * FROM reservation");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addReservation($carId,$userId,$pickupLocation,$dropLocation,$pickupDate,$dropDate){
        try {
            $db = dbConnaction::getConnection();
            $db = dbConnaction::getConnection();
            $query = $db->prepare("INSERT INTO reservation (	car_fk,	user_fk,pickup_location	,drop_location,pickup_date,drop_date) values (:carId, :userId, :pickupLocation, :dropLocation, :pickupDate, :dropDate);");
            $query->bindParam(":carId", $carId);
            $query->bindParam(":userId", $userId);
            $query->bindParam(":pickupLocation", $pickupLocation);
            $query->bindParam(":dropLocation", $dropLocation);
            $query->bindParam(":pickupDate", $pickupDate);
            $query->bindParam(":dropDate", $dropDate);
            $query->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function deleteReservation($id){
        $db = dbConnaction::getConnection();
        $query = $db->prepare("DELETE FROM reservation WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();

    }
}




?>