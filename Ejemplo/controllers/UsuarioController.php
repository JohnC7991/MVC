<?php

//mostramos las acciones que puede hacwer el controlador
    class UsuarioController{
        public function mostrarTodos(){
            require_once 'models/modelsUsuario.php';
            $usuario=new Usuario();

            $todos_los_usuarios=$usuario->conseguirTodos();
            require_once 'views/Usuarios/mostrar-todos.php';
        }

        public function crear(){
            require_once 'views/Usuarios/crear.php';
        }
    }