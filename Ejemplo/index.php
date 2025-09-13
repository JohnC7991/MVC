<h1>Benvenutto a miglia Web </h1>

<?php

//require_once 'controllers/UsuarioController.php';
//require_once 'controllers/ProductoController.php';
require_once 'autoload.php';
$controlador=new UsuarioController;

//$controlador -> mostrarTodos();

//$controlador -> crear(); 



$nombre_controlador = $_GET['controller'];

if(isset($nombre_controlador) && class_exists($nombre_controlador)){
    $nombre_controlador=$_GET['controller'];
    $controlador = new $nombre_controlador;

        if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
    $action=$_GET['action'];
    $controlador->$action();
        }else{
            echo "La Magia que buscas no existe";
        } 

}else {
            echo "La pagina que buscas no existe";
}

