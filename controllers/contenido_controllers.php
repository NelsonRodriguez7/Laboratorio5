<?php
    class contenido_controllers{
        public static function contenido (){
            $title = "Contenido | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contenido/contenido.php");
            require_once("views/template/footer.php");
        }
    }
?>