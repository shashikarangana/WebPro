<?php

require_once __DIR__."/../FoodRepo.php";
require_once __DIR__."/../../core/Food.php";

class FoodRepoImpl implements FoodRepo
{
    private $connection;

    /**
     * FoodRepoImpl constructor.
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

    public function addFood(Food $food): bool
    {
        // TODO: Implement addFood() method.
    }

    public function deleteFood(string $id): bool
    {
        // TODO: Implement deleteFood() method.
    }

    public function searchFood(string $id): array
    {
        // TODO: Implement searchFood() method.
    }

    public function updateFood(Food $food): bool
    {
        // TODO: Implement updateFood() method.
    }

    public function getAllFoods(): array
    {
        $resultSet=$this->connection->query("Select * from food");
        return $resultSet->fetch_all();
    }

    public function getAllFoodNames(): array
    {
        $resultset=$this->connection->query("Select fname from food");
        return $resultset->fetch_all();
    }

}