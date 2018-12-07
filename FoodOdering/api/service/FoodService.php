<?php

require_once __DIR__."/../business/impl/FoodBusinessImpl.php";

$foodBOImpl=new FoodBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($foodBOImpl->getAllFoods());
        break;
}