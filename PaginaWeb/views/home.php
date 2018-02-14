<?php
include_once 'app/Conexion.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/Writer.inc.php';

$title = 'Pagina Web';

include_once 'templates/Start.inc.php';
include_once 'templates/Navbar.inc.php';
?>

<!-- 
xs - muy pequeño 
sm - pequeña 
md - mediana
lg - grande
-->
<div class="container" >
    <div class="jumbotron">
        <h1>Welcome!</h1>
        <p>
            The following web site is for students
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="¿Qué buscas?">
                            </div>    
                            <button class="form-control" >Search</button>                                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrer
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendar
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <?php
            Writer::writerEntrys();
            ?>
        </div>

    </div>

</div>
<?php
include 'templates/End.inc.php';
?>
