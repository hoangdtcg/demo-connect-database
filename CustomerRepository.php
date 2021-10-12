<?php

include_once "DBConnect.php";
class CustomerRepository
{
    private $dbConnect;
    protected $table = "posts";

    public function __construct($table)
    {
        $this->dbConnect = new DBConnect('demodb');
        $this->table = $table;
    }

    public function getAllCustomer(){
        $sql = "SELECT * FROM ".$this->table;
        $statement = $this->dbConnect->connect()->query($sql);
        return $statement->fetchAll();
    }

    public function getCustomerById($id){
        $sql = "SELECT * FROM customers WHERE customerNumber=".$id;
        $statement = $this->dbConnect->connect()->query($sql);
        return $statement->fetch();
    }
}