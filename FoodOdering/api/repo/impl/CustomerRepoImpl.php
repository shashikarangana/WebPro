<?php

require_once __DIR__."/../CustomerRepo.php";
require_once __DIR__."/../../core/Customer.php";

class CustomerRepoImpl implements CustomerRepo
{
    private $connection;

    /**
     * CustomerRepoImpl constructor.
     */
//    public function __construct()
//    {
//        $connection=(new DBConnection())->getDBConnection();
//        $this->connection=$connection;
//
//    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addCustomer(Customer $customer): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Customer VALUES ({$customer->getCid()},'{$customer->getCname()}','{$customer->getCaddress()}',
                {$customer->getCmobile()},'{$customer->getCemail()}','{$customer->getCuname()}','{$customer->getCpwd()}')");
        return $resp;
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
        $resultset=$this->connection->query("Select * from customer");
        return $resultset->fetch_all();
    }

    public function searchLogUser(string $pwd, string $uname): array
    {
        $resultset=$this->connection->query("Select * from customer where cuname = '"+$uname+"' and cpwd = '"+$pwd+"'");
        return $resultset->fetch_all();
    }
}