<?php
include_once 'app/SessionControl.inc.php';
include_once 'app/config.inc.php';

Conexion :: openConexion();
$users_total = UserRepository :: getUsersNumber(Conexion::getConexion());

?>

<nav class="navbar navbar-default navbar-static-top" id="1" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">This bottom display the navigation bar </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <b><a class="navbar-brand" href="<?php echo SERVER ?>">LexusScheduler</a></b>
        </div>
                <?php
                if (SessionControl::showSession()) {
                    ?>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav" >
                            <li><a href="#">Homeworks</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#">Advertisements</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#"> 
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    <?php echo '' . $_SESSION['username']; ?>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > 
                                    <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Manager <span class="caret" ></span>
                                </a>
                                <ul class="dropdown-menu" >
                                    <li>
                                        <a href="#" >
                                            Score 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" >
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" >
                                            Schedule
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" >
                                            Social
                                        </a>
                                    </li>
                                </ul>
                            <li>
                                <a href="<?php echo Logout; ?>">
                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
                                </a>
                            </li>
                            </li>
                            <?php
                        } else {
                            ?>
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav" >
                                    <li><a href="#"><i class="fas fa-newspaper"></i>News</a></li>
                                    <li><a href="#"><i class="fas fa-question"></i>Support</a></li>
                                    <li><a href="#"><i class="far fa-id-card"></i>About us</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#" >
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <?php
                                            echo $users_total;
                                            ?>
                                        </a>
                                    </li>
                                    <li><a href="<?php echo LOGIN; ?>" > <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                                    <li><a href="<?php echo REGISTER; ?>" > <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Register</a></li>
                                        <?php
                                    }
                                    ?>
                            </ul>
                        </div>
                </div>
                </nav>
