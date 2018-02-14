<div class="row">
    <div class="col-md-12">
        <button class="btn btn-primary form-control" data-toggle="collapse" data-target="#comments">
           <?php echo "Comments(" . count($comments) . ")";?>
        </button>
        <br>
        <br>
        <div id="comments" class="collapse">
            <?php
                for($i=0; $i < count($comments); $i++){
                $comment = $comments[$i];
                    ?>
                
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $comment ->getTitle() ?>
                        </div>
                        <div class="panel-body" >
                            <div class="col-md-2">
                                <?php echo $comment -> getUserId() ?>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php echo $comment -> getEntryDate() ?>
                                </p>
                                <p>
                                    <?php echo nl2br( $comment -> getText()) ?>
                                </p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
