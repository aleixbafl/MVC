<?php
    class usuariController{
        public function mostrarTodo(){
            require_once("model/usuari.php");
            $usuario = new usuari();

            $todos_los_usuarios = $usuario->conseguirTodo();

            require_once("views/usuarios/mostrar-todos.php");
        }
        public function crear(){
            require_once("views/usuarios/crear.php");
        }
    }