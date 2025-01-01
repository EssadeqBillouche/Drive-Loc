<?php
namespace classes;


class user extends person
{
    public function __construct($name, $email, $password, $roleId)
    {
        parent::__construct($name, $email, $password, $roleId);
    }

    public function singup($email, $password){
        $roleId = 1;
        $db = dbConnaction::getConnection();
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stement = $db->prepare("INSERT INTO users(email, password, role) VALUES(:email, :password, :role)");
        $stement->bindParam(':email', $email);
        $stement->bindParam(':password', $password);
        $stement->bindParam(':role', $roleId);
        $stement->execute();
    }


}
