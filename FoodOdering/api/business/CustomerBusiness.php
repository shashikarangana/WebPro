<?php

require_once __DIR__."/../core/LoginCus.php";

interface CustomerBusiness
{
    public function addCustomer(LoginCus $loginCus): bool;
    public function deleteCustomer(string $id): bool;
    public function searchCustomer(string $id): array;
    public function updateCustomer(LoginCus $loginCus): bool;
    public function getAllCustomers(): array;
}