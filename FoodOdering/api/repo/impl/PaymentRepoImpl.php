<?php

require_once __DIR__."/../PaymentRepo.php";
require_once __DIR__."/../../core/Payment.php";

class PaymentRepoImpl implements PaymentRepo
{
    private $connection;

    /**
     * PaymentRepoImpl constructor.
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

    public function addPayment(Payment $payment): bool
    {
//        echo $payment->getPrice();
        $resp=$this->connection->query("insert into payment values (null,{$payment->getPrice()})");
//        echo $resp;
        return true;
    }

    public function deletePayment(string $id): bool
    {
        // TODO: Implement deletePayment() method.
    }

    public function searchPayment(string $id): array
    {
        // TODO: Implement searchPayment() method.
    }

    public function updatePayment(Payment $payment): bool
    {
        // TODO: Implement updatePayment() method.
    }

    public function getAllPayments(): array
    {
        // TODO: Implement getAllPayments() method.
    }

    public function getAllPaymentLastID(): array
    {
        $ret=$this->connection->query("select pid from payment order by pid desc limit 1");
//        echo $ret;
        return $ret->fetch_all();

    }
}