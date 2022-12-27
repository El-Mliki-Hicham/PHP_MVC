<?php

abstract class Controller {


    public function loadModel(string $model){
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }
    
  
    public function render(string $fichier, array $data = []) {
        extract($data);
        // var_dump($data);
        // die();
        require_once(ROOT. 'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');
        }
}

?>