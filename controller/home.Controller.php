<?php
    class homeController{
        private $MODEL;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Loginphp/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function guardarUsuario($email, $password){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarEmail($email),$this->encriptarPassword
            ($this->limpiarCadena($password)));
            return $valor;
        }
        public function limpiarCadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        } 
        public function limpiarEmail($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        } 
        public function encriptarPassword($password){
            return password_hash($password, PASSWORD_DEFAULT);
        } 
    }
?>