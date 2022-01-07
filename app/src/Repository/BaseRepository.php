<?php

namespace App\Repository;

abstract class BaseRepository
{
    protected \PDO $PDO;

    public function __construct($pdo)
    {
        $this->PDO = $pdo;
    }

}
