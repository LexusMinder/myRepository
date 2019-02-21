<?php 

include_once 'app/Conexion.php';

class userFalseRepository {

   
    public static function userInsert($conexion, $user) {
        $inserted_user = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO users1(username, password, fecha_registro) VALUES(:username, :password, NOW())";
                $statement = $conexion->prepare($sql);

                $var1 = $user->getUsername();
                $var3 = $user->getPassword();


                $statement->bindParam(':username', $var1, PDO::PARAM_STR);
                $statement->bindParam(':password', $var3, PDO::PARAM_STR);

                $inserted_user = $statement->execute();
            } catch (PDOException $ex) {
                print'ERROR: ' . $ex->getMessage();
            }

            return $inserted_user;
        }
    }
}