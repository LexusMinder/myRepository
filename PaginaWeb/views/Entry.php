<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


include_once 'app/Homework.class.php';
include_once 'app/Comment.class.php';
include_once 'app/Entry.class.php';

include_once 'app/CommentRepository.inc.php';
include_once 'app/HomeworkRepository.inc.php';
include_once 'app/UserRepository.inc.php';
include_once 'app/EntryRepository.inc.php';

$title = $entry->getTitle();

include_once 'templates/Start.inc.php';
include_once 'templates/Navbar.inc.php';
?>

<div class="container contenido-articulo">
    <div class="row">
        <div class="col-md-12">
            <h1>
                <?php echo $entry->getTitle() ?>
            </h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <p>
                By <a href="#">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $author->getUsername() ?>
                </a>
                the
                <?php echo $entry->getEntryDate() ?>
            </p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <article class="text-justify">
                <?php echo nl2br($entry->getText()) ?>
            </article>
        </div>
    </div>
    <?php
    include_once 'views/RandomsEntry.php';
    ?>
    <br>
    <?php
       
        if(count($comments) >= 0){
            include_once 'templates/CommentEntry.inc.php';
        }
    ?>
</div>

<?php
include_once 'templates/End.inc.php';

