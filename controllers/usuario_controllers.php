<?php
    require_once("models/usuario_models.php");
    require_once("controllers/contenido_controllers.php");
    require_once("utils/seg.php");
    class usuario_controllers{
        public static function login() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";

            $title = "Login | Laboratorio 5";
            require_once("views/template/header.php");
            require_once("views/ingreso/ingreso.php");
            require_once("views/template/footer.php");
        }

        public static function validar() {
            if($_POST){
                 
            $obj = new usuario_informacion($_POST["txtCorreo_Usuario"],$_POST["txtContraseña_Usuario"],"","");
            $resultado = $obj->valida_usuario();
            if(count($resultado)>0){
                $_SESSION["correo"] = $resultado["correo"];
                $_SESSION["nombre"] = $resultado["nombre"];
                call_user_func("contenido_controllers::contenido");
            }else
                header("location:index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")."&msg=Correo o Password incorrecto");
            }
        }

        public static function cerrar_sesion(){
            session_destroy();
            header("location:index.php");
        }
    }
?>