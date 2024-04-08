<?php

namespace src\orm;
use \PDO;

final class Connect
{
    private string $dns = '';
    private string $username = '';
    private string $password = '';
    private PDO $connect;

    public function __construct()
    {
        $this->init();
        $this->connect();
    }

    private function init() : void
    {
        $config = include_once __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."dbconfig.php";
        $this->dns = $config['driver'] . ':host=' . $config['host_name'] . ';dbname=' . $config['dbname'];
        $this->username = $config['username'];
        $this->password = $config['password'];
    }

    private function connect() : void
    {
        $this->connect = new PDO($this->dns, $this->username, $this->password);
    }

    public function getConnect() : PDO
    {
        return $this->connect;
    }
}