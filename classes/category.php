<?php

namespace classes;


class category
{
    private $nameCategory;
    private $categoryDescription;
    public function __construct($nameCategory, $categoryDescription){
        $this->nameCategory = $nameCategory;
        $this->categoryDescription = $categoryDescription;
    }
    public function AddCategory($categoryName, $categoryDescription) {
        $db = dbConnaction::getConnection();
        $STEM = $db->prepare("SELECT * FROM category WHERE Category_name = :nameCategory");
        $STEM->bindParam(":nameCategory", $categoryName);
        $STEM->execute();

        if ($STEM->rowCount() == 0) {
            $STEM = $db->prepare("INSERT INTO category (Category_name, description) VALUES (:name, :description)");
            $STEM->bindParam(":name", $categoryName);
            $STEM->bindParam(":description", $categoryDescription);
            $STEM->execute();
            return true;
        } else {
            return false;
        }
    }



}