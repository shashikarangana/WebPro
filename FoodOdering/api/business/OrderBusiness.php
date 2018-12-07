<?php

require_once __DIR__."/../core/CusOrder.php";

interface OrderBusiness
{
    public function addOrder(CusOrder $cusOrder): bool;
    public function deleteOrder(string $id): bool;
    public function searchOrder(string $id): array;
    public function updateOrder(CusOrder $cusOrder): bool;
    public function getAllOrders(): array ;
}