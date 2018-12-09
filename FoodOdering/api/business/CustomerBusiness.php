<?php

require_once __DIR__."/../core/Customer.php";
//require_once __DIR__."/../core/LoginCus.php";

interface CustomerBusiness
{
    public function addCustomer(Customer $customer): bool;
    public function deleteCustomer(string $id): bool;
    public function searchCustomer(string $id): array;
    public function searchLogUser(string $uname,string $pwd): array;
    public function updateCustomer(Customer $customer): bool;
    public function getAllCustomers(): array;
}