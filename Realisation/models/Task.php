<?php 

class Task extends Model {

    public function __construct()
    {
        $this->table = 'task';    
        $this->getConnection();

    } 


    
    
}

?>