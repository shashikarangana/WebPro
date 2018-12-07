<?php

interface PaymentBusiness
{
    public function addPayment(Payment $payment): bool;
    public function deletePayment(string $id): bool;
    public function searchPayment(string $id): array;
    public function updatePayment(Payment $payment): bool;
    public function getAllPayments(): array ;
    public function getAllPaymentIDS(): array ;
}