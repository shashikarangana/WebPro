<?php

require_once __DIR__."/../business/impl/FoodBusinessImpl.php";

$foodBOImpl=new FoodBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($foodBOImpl->getAllFoods());
        break;

    case "POST":
        $fid=$_POST["FoodId"];
        $fname=$_POST["FoodName"];
        $price=$_POST["Price"];
        $description=$_POST["Description"];

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