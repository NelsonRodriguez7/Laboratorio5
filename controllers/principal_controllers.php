<?php
    class principal_controller{
        public static function index (){
            if(isset($_COOKIE["correo"])){
                $_SESSION["correo"] = seg::decodificar($_COOKIE["correo"]);
                $_SESSION["nombre"] =seg::decodificar($_COOKIE["nombre"]);
            }
            $title = "Home | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/principal/index.php");
            require_once("views/template/footer.php");
        }
    }
?>