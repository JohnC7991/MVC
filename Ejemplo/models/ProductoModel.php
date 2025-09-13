<?php

class Producto{

    public $nombreProducto;
    public $descripcion;

    function getNombreProducto(){
        return $this->nombreProducto;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setNombreProducto($nombreProducto){
        $this->nombreProducto = $nombreProducto;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function conseguirTodos(){
        echo "IMPRIMIR TODOS LOS PRODUCTOS...";
    }
}