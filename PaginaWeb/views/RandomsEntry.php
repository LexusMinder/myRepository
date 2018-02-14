<?php
include_once 'app/Writer.inc.php';
?>

<div class="row">
    <div class="col-md-12">
        <hr>
        <h3>Otras entradas interesantes</h3>
    </div>

    <?php
    for ($i = 0; $i < count($randoms_entrys); $i++) {
        $real_entry = $randoms_entrys[$i];
        ?>
        <div class="col-md-4">
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <?php echo $real_entry->getTitle() ?>
                </div>
                <div class="panel-body" >
                    <p>
                        <?php echo Writer::summarizeText(nl2br($real_entry->getText())); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="col-md-12" >
        <hr>
    </div>
</div>