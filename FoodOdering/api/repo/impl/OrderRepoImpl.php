<?php

require_once __DIR__."/../OrderRepo.php";
require_once __DIR__."/../../core/Order.php";

class OrderRepoImpl implements OrderRepo
{
    private $connection;

    /**
     * OrderRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection=$connection;
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addOrder(Order $order): bool
    {
//        $resp=$this->connection->query("insert into orders values('{$order->getOid()}','{$order->getCid()}','{$order->getFid()}',1,'{$order->getQuantity()}','{$order->getOrderDate()}')");
        $resp=$this->connection->query("insert into orders values(null,2,2,1,1,'2018-12-4')");
        return $resp;
    }

    public function deleteOrder(string $id): bool
    {
        // TODO: Implement deleteOrder() method.
    }

    public function searchOrder(string $id): array
    {
        // TODO: Implement searchOrder() method.
    }

    public function updateOrder(Order $order): bool
    {
        // TODO: Implement updateOrder() method.
    }

    public function getAllOrders(): array
    {
        // TODO: Implement getAllOrders() method.
    }

    public function getAllOrdersPaymentLastID(): array
    {
        $resultSet=$this->connection->query("SELECT max(pid) FROM orders");
        return $resultSet->fetch_all();
    }
}