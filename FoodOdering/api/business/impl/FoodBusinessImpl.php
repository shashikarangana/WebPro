<?php

require_once __DIR__."/../../business/FoodBusiness.php";
require_once __DIR__."/../../core/Food.php";
require_once __DIR__."/../../repo/impl/FoodRepoImpl.php";
require_once __DIR__."/../../db/DBConnection.php";


class FoodBusinessImpl implements FoodBusiness
{

    public function addFood(Food $food): bool
    {
        $connection = (new DBConnction())->getDBConnection();
        $foodRepo = new FoodRepoImpl();
        $foodRepo->setConnection($connection);
        return $foodRepo->addFood($food);
        //      $connection->autocommit(false);

  //      $connection->commit();
  //      $connection->rollback();
  //      $connection->autocommit(true);

//        return true;
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
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new FoodRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllFoods();
    }

    public function getAllFoodNames(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $foodRepo=new FoodRepoImpl();
        $foodRepo->setConnection($connection);
        return $foodRepo->getAllFoodNames();
    }
}