<?php

require_once 'config/database.php';

class Usuario{

    public $id_usuario;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    private $db;

public function __construct()
{
	$this->db=database::conectar();
}


    function getId_usuario(){
        return $this->id_usuario;
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

    function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function setPassword($password){
        $this->password=$password;
        
    }
    //metdo consulta BD 
        public function conseguirTodos(){
            //var_dump($this->db);
            $query = $this->db->query("SELECT * FROM t_usuarios");
            return $query;

            echo "imprimiendo todos los usuarios";    
        }

        public function crear(){
            //var_dump(sql);
            $sql= "INSERT INTO t_usuarios 
            (id_usuario,nombre,apellidos,email,password) VALUES ({$this->id_usuario},'{$this->nombre}','{$this->apellidos}','{$this->email}','{$this->password}');";
            
            $guardar = $this->db->query($sql);
            return $guardar;
        }
}

