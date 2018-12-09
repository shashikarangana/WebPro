<?php

require_once __DIR__."/../core/Food.php";

interface FoodBusiness
{
    public function addFood(Food $food): bool;
//    public function deleteFood(string $id);
//    public function searchFood(string $id);
    public function updateFood(Food $food);
    public function getAllFoods();
    public function getAllFoodNames();
}