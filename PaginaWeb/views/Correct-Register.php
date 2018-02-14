<?php

include_once 'app/Conexion.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/User.class.php';
include_once 'app/Redirection.inc.php';

$title = 'Registro Correcto';

include 'templates/Start.inc.php';
include 'templates/Navbar.inc.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Correct Register!
                </div>
                <div class="panel-body">
                    <p>
                        Welcome to web site <b><?php echo $username?> </b>
                    </p>
                    <p><a href="<?php  echo Login ?>">Login</a> for start to use your account.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'templates/End.inc.php';
