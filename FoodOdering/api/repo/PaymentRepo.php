<?php

require_once __DIR__."/../core/Payment.php";

interface PaymentRepo
{
    public function setConnection(mysqli $connection): void;

    public function addPayment(Payment $payment): bool;

    public function deletePayment(string $id): bool;

    public function searchPayment(string $id): array;

    public function updatePayment(Payment $payment): bool;

    public function getAllPayments(): array;

    public function getAllPaymentLastID(): array ;
}