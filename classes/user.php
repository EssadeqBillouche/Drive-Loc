<?php
namespace classes;

// Include the autoloader
require_once __DIR__ . '/Autoloader.php';

// Register the autoloader
Autoloader::AutoloaderFunction();

class user extends person
{
    public function __construct($name, $email, $password, $roleId)
    {
        parent::__construct($name, $email, $password, $roleId);
    }

    public function login($email, $password){}

    public function singup($email, $password){
        $roleId = 1;
        $db = new dbConnaction();
        $db = $db->getConnection();
        $stement = $db->prepare("INSERT INTO users(email, password, role) VALUES(:email, :password, :role)");
        $stement->bindParam(':email', $email);
        $stement->bindParam(':password', $password)
        $stement->bindParam(':role', $roleId);
        $stement->execute();

    }
    public function logout(){}

}
