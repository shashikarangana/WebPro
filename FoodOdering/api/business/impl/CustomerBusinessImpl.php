<?php

require_once __DIR__."/../../business/CustomerBusiness.php";
require_once __DIR__."/../../core/Customer.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/CustomerRepoImpl.php";


class CustomerBusinessImpl implements CustomerBusiness
{
//    public function addCustomer(LoginCus $loginCus): bool
//    {
//        $connection=(new DBConnection())->getDBConnection();
//        $customerRepo=new CustomerRepoImpl();
//        $loginRepo=new LoginRepoImpl();
//        $customerRepo->setConnection($connection);
//        $loginRepo->setConnection($connection);
//        $connection->autocommit(false);
//        try {
//            $cust=new Customer($loginCus->getCid(),$loginCus->getCname(),$loginCus->getCaddress(),$loginCus->getCmobile(),$loginCus->getCemail());
//            //$log=new Login($loginCus->getCname(),$loginCus->getUserPassword());
//            $result = $customerRepo->addCustomer($cust);
//            if (!$result) {
//                return false;
//            }
////            $result = $loginRepo->addLogUSer($log);
////            if (!$result) {
////                $connection->rollback();
////                return false;
////            }
//            $connection->commit();
//            return true;
//        }finally {
//            $connection->autocommit(true);
//        }
//    }
    public function addCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
      //  console.log($customer+'in business imple');
        return $customerRepo->addCustomer($customer);
    }
    public function deleteCustomer(string $id): bool
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function searchCustomer(string $id): array
    {
        // TODO: Implement searchCustomer() method.
    }

    public function updateCustomer(Customer $customer): bool
    {
        // TODO: Implement updateCustomer() method.
    }

    public function getAllCustomers(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllCustomers();
    }

    public function searchLogUser(string $uname, string $pwd): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllCustomers();
    }
}