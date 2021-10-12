<?php

//DSN: Data Source Name : mysql, localhost, dbname...
//username: root
//password: *****

//PDO (PHP Data Object) - mysqli
class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct($dbname)
    {
        $this->dsn = "mysql:host=localhost;dbname=".$dbname.";charset=utf8";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn,$this->username,$this->password);
            return $conn;
        }catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }

    }
}