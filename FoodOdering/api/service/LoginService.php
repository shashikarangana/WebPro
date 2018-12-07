<?php

require_once __DIR__."/../business/impl/LoginBusinessImpl.php";
require_once __DIR__."/../core/Login.php";

$loginBOImpl=new LoginBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($loginBOImpl->getAllLogins());
        break;
}