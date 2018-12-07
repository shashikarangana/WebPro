<?php


require_once __DIR__."/../OrderBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/CusOrder.php";
require_once __DIR__."/../../repo/impl/OrderRepoImpl.php";
require_once __DIR__."/../../repo/impl/PaymentRepoImpl.php";

class OrderBusinessImpl implements OrderBusiness
{

    public function addOrder(CusOrder $cusOrder): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $paymentRepoImpl=new PaymentRepoImpl();
        $orderRepoImp=new OrderRepoImpl();
        $paymentRepoImpl->setConnection($connection);
        $orderRepoImp->setConnection($connection);
        $connection->autocommit(false);
        try{
            echo $cusOrder->getPayment();
            $payment=new Payment($cusOrder->getPid(),$cusOrder->getPayment());
            $result=$paymentRepoImpl->addPayment($payment);
            if (!$result){
                return false;
            }
            $array=$paymentRepoImpl->getAllPaymentLastID();
            echo $array[0];
//            $order=new Order($cusOrder->getOid(),$cusOrder->getCid(),$cusOrder->getFid(),$ids,$cusOrder->getQuantity(),$cusOrder->getOrderDate());
//            $result=$orderRepoImp->addOrder($order);
//            if (!$result){
//                $connection->rollback();
//                return false;
//            }
            $connection->commit();
            return true;
        }finally{
            $connection->autocommit(true);
        }

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