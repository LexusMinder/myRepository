<?php
include_once 'app/Conexion.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/ValidateRegister.inc.php';
include_once 'app/User.class.php';
include_once 'app/Redirection.inc.php';
include_once 'app/config.inc.php';



if (isset($_POST['submit'])) {
    Conexion :: openConexion();
    $validate = new ValidateRegister($_POST['username'], $_POST['email'], $_POST['password1'], $_POST['password2'], Conexion :: getConexion());

    if ($validate->validateRegister()) {
        $user = new User('', $validate->getUsername(), password_hash($validate->getPassword(), PASSWORD_DEFAULT), $validate->getEmail(), '', '', '');
        $inserted_user = UserRepository :: userInsert(Conexion :: getConexion(), $user);
        
        print $user ->getUsername();;
        
        if ($inserted_user) {
            Redirection::redirect(CORRECT_REGISTER . '/' . $user->getUsername());
        }
    }

    Conexion :: closeConexion();
}
$title = 'Register';

include_once 'templates/Start.inc.php';
include_once 'templates/Navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Register Now</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instructions
                    </h3>
                </div>
                <div class="panel-body ">

                    <p class="text-justify">
                        For register in this web site you need 
                        insert your username, password and email this will
                        need be true being that it´s necesary for authetication of account.
                    </p>
                    <a href="#">Already have an account?</a>
                    <br>
                    <br>
                    <a href="#">Did you forget your password?</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class='panel-heading'>
                    <h3 class="panel-title">
                        Introduce your information
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo REGISTER; ?>" method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            include_once 'templates/FullForm.inc.php';
                        } else {
                            include_once 'templates/EmptyForm.inc.php';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>   
<?php
include 'templates/End.inc.php';
?>

