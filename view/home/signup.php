<?php
    require_once("C:/xampp/htdocs/Loginphp/view/head/head.php")
?>

<div class ="fondo-login">
    <div class ="icon">
        <a href="/loginphp/index.php">
            <i class="fa-solid fa-shield-dog dog-icon"></i>
        </a>
    </div>
    <div class= "titulo"> 
        Crea una cuenta en DogCom
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" value="<?= (!empty($_GET ['email'])) ? $_GET['email'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarPassword('password', 'eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="password"  value="<?= (!empty($_GET ['password'])) ? $_GET['password'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repeat the password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarPassword('password2', 'eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarPassword"  value="<?= (!empty($_GET ['confirmarPassword'])) ? $_GET['confirmarPassword'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
    Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesion</a>
    </div>

</div>

<?php
    require_once("C:/xampp/htdocs/Loginphp/view/head/footer.php");
?>