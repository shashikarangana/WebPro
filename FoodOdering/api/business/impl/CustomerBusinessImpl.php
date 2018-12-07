<?php

require_once __DIR__."/../CustomerBusiness.php";
require_once __DIR__."/../../core/LoginCus.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/CustomerRepoImpl.php";
require_once __DIR__."/../../repo/impl/LoginRepoImpl.php";

class CustomerBusinessImpl implements CustomerBusiness
{

    public function addCustomer(LoginCus $loginCus): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $loginRepo=new LoginRepoImpl();
        $customerRepo->setConnection($connection);
        $loginRepo->setConnection($connection);
        $connection->autocommit(false);
        try {
            $cust=new Customer($loginCus->getCid(),$loginCus->getCname(),$loginCus->getCaddress(),$loginCus->getCmobile(),$loginCus->getCemail());
            $log=new Login($loginCus->getCname(),$loginCus->getUserPassword());
            $result = $customerRepo->addCustomer($cust);
            if (!$result) {
                return false;
            }
            $result = $loginRepo->addLogUSer($log);
            if (!$result) {
                $connection->rollback();
                return false;
            }
            $connection->commit();
            return true;
        }finally {
            $connection->autocommit(true);
        }
    }

    public function deleteCustomer(string $id): bool
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function searchCustomer(string $id): array
    {
        // TODO: Implement searchCustomer() method.
    }

    public function updateCustomer(LoginCus $loginCus): bool
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
}