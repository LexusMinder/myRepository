<?php

include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/Comment.class.php';

class CommentRepository {

    public static function commentInsert($conexion, $comment) {
        $inserted_homework = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO comment(title, user_id, homework_id, text, entry_date) VALUES(:title, :user_id, :homework_id, :text, NOW())";
                $statement = $conexion->prepare($sql);

                $var1 = $comment->getUserId();
                $var2 = $comment->getCommentId();
                $var3 = $comment->getText();
                $var4 = $comment->getTitle();

                $statement->bindParam(':title', $var4, PDO::PARAM_STR);
                $statement->bindParam(':user_id', $var1, PDO::PARAM_STR);
                $statement->bindParam(':comment_id', $var2, PDO::PARAM_STR);
                $statement->bindParam(':text', $var3, PDO::PARAM_STR);

                $inserted_homework = $statement->execute();
            } catch (PDOException $ex) {
                print'ERROR: ' . $ex->getMessage();
            }

            return $inserted_homework;
        }
    }

    public static function getCommentsByDateDescedant($conexion) {
        $comments = [];

        if (isset($conexion)) {
            try {
                $sql = 'SELECT * FROM comment ORDER BY entry_date DESC LIMIT 3';

                $statement = $conexion->prepare($sql);

                $statement->execute();

                $resultado = $statement->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $comments[] = new Comment(
                                $fila['id'], $fila['title'], $fila['user_id'], $fila['comment_id'], $fila['text'], $fila['entry_date']
                        );
                    }
                }
            } catch (PDOException $ex) {
                print "Error" . $ex->getMessage();
            }
            return $comments;
        }
    }

    public static function getComments($conexion, $comment_id) {
        $comment = array();
        if (isset($conexion)) {
            try {
                include_once 'Comment.class.php';

                $sql = "SELECT * FROM comment WHERE user_id = :user_id";
                $statement = $conexion->prepare($sql);
                $statement->bindParam(':user_id', $comment_id, PDO::PARAM_STR);
                $statement->execute();

                $result = $statement->fetchAll();

                if (count($result)) {
                    foreach ($result as $fila) {
                        $comment[] = new Comment($fila['id'], $fila['title'], $fila['user_id'], $fila['comment_id'], $fila['text'], $fila['entry_date']);
                    }
                }
            } catch (PDOException $exc) {
                print 'Error' . $exc->getMessage();
            }
        }
        return $comment;
    }

}
