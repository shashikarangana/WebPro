<?php

require_once __DIR__."/../business/impl/PaymentBusinessImpl.php";

$paymentBOImp=new PaymentBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($paymentBOImp->getAllPaymentIDS());
        break;
}