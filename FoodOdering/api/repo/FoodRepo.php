<?php

require_once __DIR__."/../core/Food.php";

interface FoodRepo
{
    public function setConnection(mysqli $connection): void;

    public function addFood(Food $food): bool;

    public function deleteFood(string $id): bool;

    public function searchFood(string $id): array;

    public function updateFood(Food $food): bool;

    public function getAllFoods(): array;

    public function getAllFoodNames(): array;


}