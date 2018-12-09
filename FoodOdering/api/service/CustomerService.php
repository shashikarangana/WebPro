<?php

require_once __DIR__."/../business/impl/CustomerBusinessImpl.php";
require_once __DIR__."/../core/Customer.php";

$customerBO=new CustomerBusinessImpl();
////$operartion=$_GET["operation"];
//
$method=$_SERVER["REQUEST_METHOD"];
$post_op=$_POST["operation"];
$get_op =$_GET["operationGet"];
switch ($method){
    case "GET":
        switch ($get_op){
//            case "All":
//                echo json_encode($customerBO->getAll());
//                break;
//            case "Search":
//                $cusId=$_GET["custID"];
//                echo json_encode($customerBO->search($cusId));
//                break;
            case "SearchLogin":
                $uname = $_GET["userName"];
                $pwd = $_GET["userPassword1"];
                echo json_encode($customerBO->searchLogUser($uname,$pwd));
                break;
        }
        break;
    case "POST":
        switch ($post_op){
            case "Add":
                $cid='1';
                $name=$_POST["CusName"];
                $address=$_POST["CusAddress"];
                $mobile=$_POST["CusMobile"];
                $email=$_POST["CusEmail"];
                $uname=$_POST["uname"];
                $password=$_POST["pwd"];

                //var_dump($_POST);
                $result=$customerBO->addCustomer(new Customer($cid,$name,$address,$mobile,$email,$uname,$password));
               // $resp = $customerBO->addCustomer(new Customer($id,$name,$address,$salary));
                //echo $name.'-'.$address.'-'.$mobile.'-'.$email;
                echo $result;
                break;
//            case "Update":
//                $resp = $customerBO->updateModel(new Model(0, $name, $description));
//                echo $resp;
//                break;
//            case "Delete":
//                $resp = $customerBO->deleteModel($name);
//                echo $resp;
//                break;
        }
        break;
}
//switch ($method){
//    case "GET":
//        echo json_encode($customerBO->getAllCustomers());
//        break;
//    case "POST":
//        $cid=0;
//        $name=$_POST["cname"];
//        //$cname='sm';
//        $address=$_POST["caddress"];
//        //$caddress='asd';
//        $mobile=$_POST["cmobile"];
//       // $cmobile=12345;
//        $email=$_POST["cemail"];
//        //$cemail='asd@gmail.com';
//        $password='123';
//
//                $logincus=new LoginCus($cid,$name,$address,$mobile,$email,$password);
//                $result=$customerBO->addCustomer($logincus);
//                break;
//        }
//}
//$connect=mysqli_connect("127.0.0.1","root","1234","foododering","3306");
//if(!$connect){
//    echo mysqli_connect_error();
//}else{
//    echo "sdsddddsd";
//    mysqli_query($connect,"insert into Customer values(null,'$name','$address',$mobile,'$email')");
//    echo  mysqli_error($connect);
//}