<?php
    class principal_controller{
        public static function index (){
            $title = "Home | Laboratorio 5";
            require_once("views/template/header.php");
            
            require_once("views/principal/index.php");
            require_once("views/template/footer.php");
        }
    }
?>