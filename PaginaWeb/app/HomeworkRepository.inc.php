<?php

include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/Homework.class.php';

class HomeworkRepository {

    public static function homeworkInsert($conexion, $homework) {
        $inserted_homework = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO homework(title, profesor_id, description, entry_date, delivery_date) VALUES(:title, :profesor_id, :description, NOW(), :delivery_date)";
                $statement = $conexion->prepare($sql);

                $var1 = $homework->getTitle();
                $var2 = $homework->getProfesorId();
                $var3 = $homework->getDescription();
                $var4 = $homework->getDeliveryDate();


                $statement->bindParam(':title', $var1, PDO::PARAM_STR);
                $statement->bindParam(':profesor_id', $var2, PDO::PARAM_STR);
                $statement->bindParam(':description', $var3, PDO::PARAM_STR);
                $statement->bindParam(':delivery_date', $var4, PDO::PARAM_STR);

                $inserted_homework = $statement->execute();
            } catch (PDOException $ex) {
                print'ERROR: ' . $ex->getMessage();
            }

            return $inserted_homework;
        }
    }

}
