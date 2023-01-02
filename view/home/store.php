<?php
    require_once("c://xampp/htdocs/loginphp/controller/home.Controller.php");
    $obj = new homeController();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmarPassword = $_POST['confirmarPassword'];
    $error = "";
    if(empty($email) || empty($password) || empty($confirmarPassword)){
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&email=".$email."&&password=".$password.
        "&&confirmarPassword=".$confirmarPassword);
    }else if($email && $password && $confirmarPassword){
        if($password == $confirmarPassword){
            if($obj->guardarUsuario($email, $password) == false){
                $error .= "<li>El correo ya está registrado</li>";
                header("Location:signup.php?error=".$error."&&email=".$email."&&password=".$password.
        "&&confirmarPassword=".$confirmarPassword);
            }else{
                header("Location:login.php");
            }
        }else{
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:signup.php?error=".$error."&&email=".$email."&&password=".$password.
        "&&confirmarPassword=".$confirmarPassword);
        }
    }
?>

