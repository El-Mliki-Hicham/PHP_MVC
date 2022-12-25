<?php

define("ROOT",str_replace("index.php","",$_SERVER["SCRIPT_FILENAME"]));

$params =  explode("/",$_GET["p"]);

if($params[0] != ""){
$NameController = ucfirst($params[0]);
$action=  isset($params[1])? $params[1]: "index"   ;

require_once(ROOT.'controllers/'.$NameController.".php");

if(method_exists($NameController,$action))

$Controller = new $NameController();

 $Controller->$action();

// var_dump($Action);


// die(ROOT);
}
else{
  echo "ddd";
}
// var_dump($action);
?>