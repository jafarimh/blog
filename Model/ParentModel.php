<?php

namespace App\Model;

use PDO;

abstract class ParentModel
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8mb4', 'root', 'Bf)CuOwLkw87cc7y');
    }
}