<?php
    require_once("../head/head.php")
?>

<div class ="fondo-login">
    <div class ="icon">
        <a href="/loginphp/index.php">
            <i class="fa-solid fa-shield-dog dog-icon"></i>
        </a>
    </div>
    <div class= "titulo"> 
        Inicia sesion con DogCom
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarPassword('password', 'eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
    Nuevo en DogCom? <a href="signup.php" style="text-decoration: none;">Crea una cuenta</a>
    </div>
</div>

<?php
    require_once("../head/footer.php");
?>
