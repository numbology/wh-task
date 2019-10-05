<?php

class Db {

    private $connection;
    private static $instance = null;

    private function __construct()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    }

    static public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Db();
        }

        return self::$instance;
    }
    
    public function getConnection()
    {
        return $this->connection;
    }

    public final function __clone()
    {
        die('hehe');
    }
}