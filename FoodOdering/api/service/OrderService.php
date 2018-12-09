<?php

require_once __DIR__."/../business/impl/OrderBusinessImpl.php";
require_once __DIR__."/../core/CusOrder.php";

$orderBOImpl=new OrderBusinessImpl();


$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "POST":
        $pid='1';
        $price=$_POST["orderTotalPrice"];
        $oid='2';
        $cid=$_POST["orderCustomerID"];
        $fid=$_POST["orderItemID"];
        $quantity=$_POST["orderQuantity"];
        $ordate=$_POST["OrderDate"];
var_dump($_POST);
        $cusOrder=new CusOrder($oid,$cid,$fid,$pid,$quantity,$ordate,$price);
        //echo $price;
        //echo $cid,$fid,$quantity;
        $result=$orderBOImpl->addOrder($cusOrder);
        echo $result;
        break;
}