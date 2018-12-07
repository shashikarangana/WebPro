<?php

require_once __DIR__."/../business/impl/CustomerBusinessImpl.php";
require_once __DIR__."/../core/LoginCus.php";
require_once __DIR__."/../core/Customer.php";

$customerBO=new CustomerBusinessImpl();
////$operartion=$_GET["operation"];
//
$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($customerBO->getAllCustomers());
        break;
    case "POST":
        $id=0;
        $name=$_POST["customerName"];
        $address=$_POST["customerAddress"];
        $mobile=$_POST["customerMobile"];
        $email=$_POST["customerEmail"];
        $password=$_POST["userPassword"];
//
//        switch ($operartion){
//            case "add":
//                $login=new Login($name,$password);
//                $customer=new Customer($id,$name,$address,$mobile,$email);
                $logincus=new LoginCus($id,$name,$address,$mobile,$email,$password);
                $result=$customerBO->addCustomer($logincus);
                break;
        }
//}
//$connect=mysqli_connect("127.0.0.1","root","1234","foododering","3306");
//if(!$connect){
//    echo mysqli_connect_error();
//}else{
//    echo "sdsddddsd";
//    mysqli_query($connect,"insert into Customer values(null,'$name','$address',$mobile,'$email')");
//    echo  mysqli_error($connect);
//}