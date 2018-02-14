<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/ValidateLogin.inc.php';
include_once 'app/SessionControl.inc.php';
include_once 'app/Redirection.inc.php';

if (SessionControl::showSession()) {
    Redirection::redirect(SERVER);
}

if (isset($_POST['login'])) {
    Conexion::openConexion();

    $validate = new ValidateLogin($_POST['email_username'], $_POST['password'], Conexion::getConexion());

    if ($validate->getError() === '' && !is_null($validate->getUser())) {
        //Sign in 
        //redirect to index
        SessionControl::startSession($validate-> getUser()-> getId(), 
                   $validate->getUser()->getUsername());
        Redirection::redirect(SERVER);
    } else {
        echo 'Inicio de sesion fallo';
    }

    Conexion::closeConexion();
}


$title = "Login";

include_once 'templates/Start.inc.php';
include_once 'templates/Navbar.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>    
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Sign in to your account </h4>
                </div>
                <div class="panel-body">
                    <form role='form' method="POST" action="Login.php">

                        <label for="email_user" class="sr-only">Email or Username</label>
                        <input type="text" name="email_username" id="email_username" class="form-control" placeholder="Email or username" 
                        <?php
                        if (isset($_POST['login']) && isset($_POST['email_username']) && !empty($_POST['email_username'])) {
                            echo 'value="' . $_POST['email_username'] . '"';
                        }
                        ?>
                               required autofocus>
                        <br>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <br>
                        <?php
                        if (isset($_POST['login'])) {
                            $validate->showError();
                        }
                        ?>
                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Log in</button>
                    </form>   
                    <br>
                    <br>
                    <div class="text-center">
                        <a href="#">Do you forget your password? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
