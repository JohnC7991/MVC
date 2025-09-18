<?php

require_once 'config/database.php';

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    private $db;

public function __construct()
{
	$this->db=database::conectar():
}


    function getNombre(){
        return $this->nombre;
    }
    function getApellidos(){
        return $this->apellidos;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }

    function setNombre(){
        $this->nombre=$nombre;
    }
    function setApellidos(){
        $this->apellidos=$apellidos;
    }
    function setEmail(){
        $this->email=$email;
    }
    function setPassword(){
        $this->password=$password;
        
    }
    //metdo consulta BD 
        public function conseguirTodos(){
            echo "imprimiendo todos los usurios";    
        }
}

