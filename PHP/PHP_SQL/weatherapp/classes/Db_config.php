<?php

class Db_config {

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "weatherapp";

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)){

            $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if (!$this->connection){
                echo "Cannot connect to database";
                exit;
            }
        }
        return $this->connection;
    }
}
