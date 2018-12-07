<?php

require_once __DIR__."/../PaymentBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Payment.php";
require_once __DIR__."/../../repo/impl/PaymentRepoImpl.php";

class PaymentBusinessImpl implements PaymentBusiness
{

    public function addPayment(Payment $payment): bool
    {
        // TODO: Implement addPayment() method.
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

    public function getAllPaymentIDS(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $payment=new PaymentRepoImpl();
        $payment->setConnection($connection);
        return $payment->getAllPaymentLastID();
    }
}