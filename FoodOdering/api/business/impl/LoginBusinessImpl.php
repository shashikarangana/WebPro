<?php

require_once __DIR__."/../LoginBusiness.php";
require_once __DIR__."/../../core/Login.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/LoginRepoImpl.php";

class LoginBusinessImpl implements LoginBusiness
{

    public function addLogin(Login $login): bool
    {
        // TODO: Implement addLogin() method.
    }

    public function deleteLogin(string $id): bool
    {
        // TODO: Implement deleteLogin() method.
    }

    public function searchLogin(string $id): array
    {
        // TODO: Implement searchLogin() method.
    }

    public function updateLogin(Login $login): bool
    {
        // TODO: Implement updateLogin() method.
    }

    public function getAllLogins(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new LoginRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllLogUSers();
    }
}