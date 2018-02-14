<?php
include_once 'app/Conexion.inc.php';
include_once 'app/CommentRepository.inc.php';
include_once 'app/EntryRepository.inc.php';

class Writer {

    public static function writerComments() {
        $comments = CommentRepository::getCommentsByDateDescedant(Conexion::getConexion());

        if (count($comments)) {
            foreach ($comments as $comment) {
                self::writeComment($comment);
            }
        }
    }

    public static function writerComment($comment) {
        if (!isset($comment)) {
            return;
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                        echo $comment->getTitle();
                        ?>
                    </div>
                    <div class="panel body">
                        <p>
                            <strong>
                                <?php
                                echo $comment->getEntryDate();
                                ?>
                            </strong>    
                        </p>
                        <div class="text-justify">
                            <?php
                            echo nl2br(self::summarizeText($comment->getText()));
                            ?>
                        </div> 
                        <br>
                        <div class="text-center">
                            <a class="btn btn-primary" href="<?php echo ENTRY ?>" role="button">Seguir leyendo</a>
                        </div>    
                    </div>    
                </div>
            </div>
        </div>
        <?php
    }

    public static function writerEntrys() {
        $entrys = EntryRepository::getEntrysByDateDescedant(Conexion::getConexion());

        if (count($entrys)) {
            foreach ($entrys as $entry) {
                self::writerEntry($entry);
            }
        }
    }

    public static function writerEntry($entry) {
        if (!isset($entry)) {
            return;
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                        echo $entry->getTitle();
                        ?>
                    </div>
                    <div class="panel body">
                        <p>
                            <strong>
                                <?php
                                echo $entry->getEntryDate();
                                ?>
                            </strong>    
                        </p>
                        <div class="text-justify">
                            <?php
                            echo nl2br(self::summarizeText($entry->getText()));
                            ?>
                        </div> 
                        <br>
                        <div class="text-center">
                            <a class="btn btn-primary" href="<?php echo ENTRY . $entry->getTitle()?>" role="button">Seguir leyendo</a>
                        </div>    
                    </div>    
                </div>
            </div>
        </div>
        <?php
    }

    public static function summarizeText($text) {
        $maximiun_lenght = 400;

        $result = '';

        if (strlen($text) >= $maximiun_lenght) {
            /* result = substr($text, 0, $maximiun_lenght) */
            for ($i = 0; $i < $maximiun_lenght; $i++) {
                $result .= substr($text, $i, 1);
            }

            $result .= '...';
        } else {
            $result = $text;
        }

        return $result;
    }

}
