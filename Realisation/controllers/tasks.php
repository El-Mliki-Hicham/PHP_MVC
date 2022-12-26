<?php

class Tasks extends Controller  {

public function getTasks(){
    $this->loadModel("task");
    $task= $this->task->All();
    $name = "fff";
    $this->render('index',compact('name'));
}


}

?>