<?php

class Model {
    
    protected $db = null;

    public function __construct()
    {
        $dbInit = Db::getInstance();
        $this->db = $dbInit->getConnection();
    }
}