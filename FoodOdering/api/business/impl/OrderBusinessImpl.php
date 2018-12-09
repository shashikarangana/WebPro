<?php


require_once __DIR__."/../../OrderBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/CusOrder.php";
require_once __DIR__."/../../repo/impl/OrderRepoImpl.php";
//require_once __DIR__."/../../repo/impl/PaymentRepoImpl.php";

class OrderBusinessImpl implements OrderBusiness
{

    public function addOrder(CusOrder $cusOrder): bool
    {
        //$paymentRepoImpl=new PaymentRepoImpl();
        //$paymentRepoImpl->setConnection($connection);
        $connection=(new DBConnection())->getDBConnection();
        $orderRepoImp=new OrderRepoImpl();
        $orderRepoImp->setConnection($connection);
        return $orderRepoImp->addOrder($cusOrder);


    }

    public function deleteOrder(string $id): bool
    {
        // TODO: Implement deleteOrder() method.
    }

    public function searchOrder(string $id): array
    {
        // TODO: Implement searchOrder() method.
    }

    public function updateOrder(CusOrder $cusOrder): bool
    {
        // TODO: Implement updateOrder() method.
    }

    public function getAllOrders(): array
    {
        // TODO: Implement getAllOrders() method.
    }
}