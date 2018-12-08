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
        $cid=0;
        //$name=$_POST["cname"];
        $cname='sm';
        //$address=$_POST["caddress"];
        $caddress='asd';
        //$mobile=$_POST["cmobile"];
        $cmobile=12345;
        //$email=$_POST["cemail"];
        $cemail='asd@gmail.com';
        $password='123';
//
//        switch ($operartion){
//            case "add":
//                $login=new Login($name,$password);
//                $customer=new Customer($id,$name,$address,$mobile,$email);
                $logincus=new LoginCus($cid,$cname,$caddress,$cmobile,$cemail,$password);
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