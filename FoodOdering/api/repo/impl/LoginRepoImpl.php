<?php

require_once __DIR__."/../LoginRepo.php";
require_once __DIR__."/../../core/Login.php";

class LoginRepoImpl implements LoginRepo
{
    private $connection;

    /**
     * LoginRepoImpl constructor.
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

    public function addLogUSer(Login $login): bool
    {
        $resp=$this->connection->query("INSERT INTO LOGIN VALUES ('{$login->getUserName()}','{$login->getUserPassword()}')");
        return $resp;
    }

    public function deleteLogUSer(string $id): bool
    {
        // TODO: Implement deleteLogUSer() method.
    }

    public function searchLogUSer(string $id): array
    {
        $resultset=$this->connection->query("Select * from login");
        return $resultset->fetch_all();
    }

    public function updateLogUSer(Login $login): bool
    {
        // TODO: Implement updateLogUSer() method.
    }

    public function getAllLogUSers(): array
    {
        $resultset=$this->connection->query("Select * from login");
        return $resultset->fetch_all();
    }
}