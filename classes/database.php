<?php 
session_start();
class database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'evaluation_db';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);

        if($this->conn->connect_error){
            die('cannot connect to database'.$this->conn->connect_error);
        }else{
            return $this->conn;
        }
    }
}











?>