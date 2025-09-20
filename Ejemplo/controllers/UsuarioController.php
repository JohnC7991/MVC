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
            require_once 'models/modelsUsuario.php';
            $practicantedeBodega = new Usuario();

            $practicantedeBodega-> setId_usuario('null');
            $practicantedeBodega-> setNombre('Betty');
            $practicantedeBodega-> setApellidos('Sharawi');
            $practicantedeBodega-> setEmail('Sharawi@mail.com');
            $practicantedeBodega-> setPassword('Sharawi123');

            $guardar = $practicantedeBodega->crear();


            require_once 'views/Usuarios/crear.php';
        }

    }

    ?>