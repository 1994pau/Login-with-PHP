<?php
    class homeModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Loginphp/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function agregarNuevoUsuario($email,$password){
            $statement = $this->PDO->prepare("INSERT INTO userdata values(null,:email, :password)");
            $statement->bindParam(":email",$email);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    } 

?>