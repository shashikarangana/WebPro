<?php

require_once __DIR__."/../business/impl/FoodBusinessImpl.php";

$foodBOImpl=new FoodBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($foodBOImpl->getAllFoods());
        break;

    case "POST":
        $fid=$_POST["FoodCode"];
        $fname=$_POST["FoodName"];
        $price=$_POST["price"];
        $description=$_POST["description"];

        switch ($operation){
            case "Save":
                $tempFood=new Food($fid, $fname, $price, $description);
                $response =$foodBusiness->addFood($tempFood);
                echo $response;
                break;

            case "update":
                $tempFood=new Food($fid, $fname, $price, $description);
                $response=$foodBusiness->updateFood($tempFood);
                echo $response;
        }
        break;
}