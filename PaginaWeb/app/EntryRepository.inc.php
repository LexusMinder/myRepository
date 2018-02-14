<?php

include_once 'app/Entry.class.php';
include_once 'app/Conexion.inc.php';

class EntryRepository {

    public static function entryInsert($conexion, $entry) {
        $inserted_entry = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO entry(title, user_id, url, text, entry_date, comment_id) VALUES(:title, :user_id, :url, :text, NOW(), :comment_id)";
                $statement = $conexion->prepare($sql);

                $var1 = $entry->getUserId();
                $var3 = $entry->getText();
                $var4 = $entry->getTitle();
                $var5 = $entry->getUrl();
                $var6 = $entry->getCommentId();

                $statement->bindParam(':title', $var4, PDO::PARAM_STR);
                $statement->bindParam(':user_id', $var1, PDO::PARAM_STR);
                $statement->bindParam(':text', $var3, PDO::PARAM_STR);
                $statement->bindParam(':url', $var5, PDO::PARAM_STR);
                $statement->bindParam(':comment_id', $var6, PDO::PARAM_STR);

                $inserted_entry = $statement->execute();
            } catch (PDOException $ex) {
                print'ERROR: ' . $ex->getMessage();
            }

            return $inserted_entry;
        }
    }

    public static function getEntrysByDateDescedant($conexion) {
        $entry = [];

        if (isset($conexion)) {
            try {
                $sql = 'SELECT * FROM entry ORDER BY entry_date DESC LIMIT 3';

                $statement = $conexion->prepare($sql);

                $statement->execute();

                $result = $statement->fetchAll();

                if (count($result)) {
                    foreach ($result as $fila) {
                        $entry[] = new Entry(
                                $fila['id'], $fila['title'], $fila['user_id'], $fila['url'], $fila['text'], $fila['entry_date'], $fila['comment_id']
                        );
                    }
                }
            } catch (PDOException $ex) {
                print "Error" . $ex->getMessage();
            }
            return $entry;
        }
    }

    public static function getEntryUrl($conexion, $url) {
        $entry = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM entry WHERE url LIKE :url";

                $statement = $conexion->prepare($sql);



                $statement->bindParam(':url', $url, PDO::PARAM_STR);

                $statement->execute();

                $result = $statement->fetch();

                if (!empty($result)) {
                    $entry = new Entry($result['id'], $result['title'], $result['user_id'], $result['url'], $result['text'], $result['entry_date'], $result['comment_id']);
                }
            } catch (PDOException $ex) {
                print "Error" . $ex->getMessage();
            }
        }

        return $entry;
    }

    public static function getRandomEntry($conexion, $limit) {
        $entrys = [];

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM entry ORDER BY RAND() LIMIT $limit";
                $statement = $conexion->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll();

                if (count($result)) {
                    foreach ($result as $fila) {
                        $entrys[] = new Entry($fila['id'], $fila['title'], $fila['user_id'], $fila['url'], $fila['text'], $fila['entry_date'], $fila['comment_id']);
                    }
                }
            } catch (PDOException $ex) {
                print "Error" . $ex->getMessage();
            }
        }
        return $entrys;
    }

}
