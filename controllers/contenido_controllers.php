<?php
    class contenido_controllers{
        public static function contenido (){
            if(isset($_COOKIE["usuario"])){
                $_SESSION["correo"] = $_COOKIE["correo"];
                $_SESSION["nombre"] =$_COOKIE["nombre"];
            }
            $title = "Contenido | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contenido/contenido.php");
            require_once("views/template/footer.php");
        }
    }
?>