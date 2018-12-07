<?php

require_once __DIR__."/../core/Order.php";

interface OrderRepo
{
    public function setConnection(mysqli $connection): void;

    public function addOrder(Order $order): bool;

    public function deleteOrder(string $id): bool;

    public function searchOrder(string $id): array;

    public function updateOrder(Order $order): bool;

    public function getAllOrders(): array;

    public function getAllOrdersPaymentLastID(): array;
}