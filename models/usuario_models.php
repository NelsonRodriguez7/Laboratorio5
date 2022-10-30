<?php
    class usuario_informacion{
        private $correo;
        private $contraseña;

        public function __construct($correo, $contraseña){
            $this->correo = $correo;
            $this->contraseña = $contraseña;
        }
    }
?>