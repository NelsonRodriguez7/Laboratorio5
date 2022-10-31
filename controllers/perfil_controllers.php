<?php
    class perfil_controllers{
        public static function perfil(){
            if(isset($_COOKIE["usuario"])){
                $_SESSION["correo"] = $_COOKIE["correo"];
                $_SESSION["nombre"] =$_COOKIE["nombre"];
            }
            $title = "Perfil | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/perfil/perfil.php");
            require_once("views/template/footer.php");
        }
    }
?>