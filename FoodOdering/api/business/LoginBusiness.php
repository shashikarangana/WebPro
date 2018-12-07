<?php

require_once __DIR__."/../core/Login.php";

interface LoginBusiness
{
    public function addLogin(Login $login): bool;
    public function deleteLogin(string $id): bool;
    public function searchLogin(string $id): array;
    public function updateLogin(Login $login): bool;
    public function getAllLogins(): array;
}