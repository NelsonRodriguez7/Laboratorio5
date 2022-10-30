<?php
    require_once("models/usuario_models.php");
    class usuario_controllers{
        public static function login() {
            $title = "Login | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/ingreso/ingreso.php");
            require_once("views/template/footer.php");
        }
    }
?>