<?php

require_once __DIR__."/../business/impl/OrderBusinessImpl.php";
require_once __DIR__."/../core/CusOrder.php";

$orderBOImpl=new OrderBusinessImpl();


$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "POST":
        $pid=0;
        $price=$_POST["orderTotalPrice"];
        $oid=0;
        $cid=$_POST["orderCustomerID"];
        $fid=$_POST["orderItemID"];
        $quantity=$_POST["orderQuantity"];
        $ordate=$_POST["OrderDate"];

        $cusOrder=new CusOrder($oid,$cid,$fid,$pid,$quantity,$ordate,$price);
        echo $price;
        echo $cid,$fid,$quantity;
        $result=$orderBOImpl->addOrder($cusOrder);
        break;
}