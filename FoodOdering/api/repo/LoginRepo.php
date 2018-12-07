<?php

require_once __DIR__."/../core/Login.php";

interface LoginRepo
{
    public function setConnection(mysqli $connection): void;

    public function addLogUSer(Login $login): bool;

    public function deleteLogUSer(string $id): bool;

    public function searchLogUSer(string $id): array;

    public function updateLogUSer(Login $login): bool;

    public function getAllLogUSers(): array;

}