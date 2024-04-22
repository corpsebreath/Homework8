<?php

namespace src\orm;
use \PDO;
use \PDOStatement;
abstract class Sql
{
    protected PDO $connect;
    protected PDOStatement $statement;
    public function __construct()
    {
        $this->connect = (new connect())->getConnect();
    }

    public function execute()
    {
        $this->statement = $this->connect->query($this->buildQuery());
        $this->statement->execute();
    }
}