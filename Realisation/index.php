<?php


// Genere les chemin ver indes.php

define("ROOT",str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'app/Controller.php');
require_once(ROOT.'app/Model.php');
// die(ROOT);
// On sépare les paramètres et on les met dans le tableau $params
$params= explode("/",$_GET['p']);

// Si au moins 1 paramètre existe
if($params[0] != ""){

  // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
$controllerName = ucfirst($params[0]);

$action = isset($params[1])? $params[1]: 'index';

require_once(ROOT.'controllers/'.$controllerName.".php");

$controller = new $controllerName();

// if method exicte
if(method_exists($controller,$action)){
$controller->$action();
}
else{
    http_response_code(404);
    echo 'this method is not defind';
}

}
else {
  
}


// var_dump($params);

?>