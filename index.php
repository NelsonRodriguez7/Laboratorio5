<?php
    require_once("controllers/principal_controllers.php");
    require_once("controllers/usuario_controllers.php");

    
    if (count($_GET)==0)
        call_user_func("principal_controller::index");
    else{
        $controlador = $_GET["c"];
        $metodo = $_GET["m"];
        call_user_func($controlador."_controllers::".$metodo);
    }
?>
