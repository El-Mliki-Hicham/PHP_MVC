<?php

class Tasks extends Controller  {

public function getTasks(){
    $this->loadModel("task");
    $task= $this->task->All();
    $this->render('index',['task'=>$task]);
}


}

?>