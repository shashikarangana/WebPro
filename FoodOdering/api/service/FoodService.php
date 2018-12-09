<?php

require_once __DIR__."/../business/impl/FoodBusinessImpl.php";
require_once __DIR__."/../core/Food.php";

$foodBOImpl=new FoodBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
$operation=$_POST["operation"];
switch ($method){
    case "GET":
        echo json_encode($foodBOImpl->getAllFoods());
        break;

    case "POST":


        switch ($operation){
            case "Save":
                $fid=$_POST["FoodCode"];
                $fname=$_POST["FoodName"];
                $price=$_POST["price"];
                $description=$_POST["description"];
                $tempFood=new Food($fid, $fname, $price, $description);
                $response =$foodBOImpl->addFood($tempFood);
                echo $response;
                break;

            case "update":
                $tempFood=new Food($fid, $fname, $price, $description);
                $response=$foodBusiness->updateFood($tempFood);
                echo $response;
        }
        break;
}