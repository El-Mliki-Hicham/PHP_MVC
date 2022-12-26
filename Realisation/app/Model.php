<?php

abstract class Model {

    private $hostName = 'localhost';
    private $dbName = 'tasks';
    private $userName = 'root';
    private $password = '';

    protected $connection ;

    public $table;
    public $id;

    public function getConnection(){

        $this->connection = null;
        try {
            $this->connection = new PDO('mysql:host='.$this->hostName.";dbname=".$this->dbName ,
            $this->userName,
            $this->password);
            $this->connection->exec('set names utf8');

        } catch (\Throwable $th) {
           echo 'erreur' . $th->getMessage();
        }
    }

    public function All(){
        $sql = 'SELECT * FROM '.$this->table;
        $query =$this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }



}


?>