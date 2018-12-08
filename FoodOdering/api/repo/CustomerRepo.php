<?php

require_once __DIR__."/../core/Customer.php";

interface CustomerRepo
{
    public function setConnection(mysqli $connection): void;

    public function addCustomer(Customer $customer): bool;

    public function deleteCustomer(string $id): bool;

    public function searchCustomer(string $id): array;

    public function updateCustomer(Customer $customer): bool;

    public function getAllCustomers(): array;
}