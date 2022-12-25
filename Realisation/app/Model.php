<?php

abstract class Model {

    private $hostName = 'localhost';
    private $dbName = 'gestion-employe';
    private $userName = 'root';
    private $password = '';

    protected $connection ;

    public $table;
    public $id;

    public function getConnection(){

        $this->connection = null;
        try {
            $this->connection = new PDO('mysql:host='.$this->host.";dbname=".$this->dbName ,
            $this->userName,
            $this->password);
            $this->connection->exec('set names utf8');

        } catch (\Throwable $th) {
           echo 'erreur' . $th->getMessage();
        }
    }


}


?>