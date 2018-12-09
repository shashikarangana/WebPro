<?php

require_once __DIR__."/../FoodRepo.php";
require_once __DIR__."/../../core/Food.php";

class FoodRepoImpl implements FoodRepo
{
    private $connection;


    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addFood(Food $food): bool
    {
        $response=$this->connection->query(
            "INSERT INTO Food VALUES (
                      '{$food->getFid()}',
                      '{$food->getFname()}',
                      {$food->getPrice()},
                      '{$food->getDescription()}')");
        return $response;
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