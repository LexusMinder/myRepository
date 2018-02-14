<?php
include 'app/User.class.php';


class UserRepository {

    public static function getUsers($conexion) {
        $users = array();
        if (isset($conexion)) {
            try {
                include 'User.class.php';
                $sql = "SELECT * FROM users";
                $statement = $conexion->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll();
                if (count($result)) {
                    foreach ($result as $row) {
                        $users[] = new User(
                                $row['id'], $row['username'], $row['password'], $row['email'], $row['fecha_registro'], $row['level']
                        );
                    }
                } else {
                    print 'No hay usuarios';
                }
            } catch (PDOException $ex) {
                print 'Error: ' . $ex->getMessage();
            }
        }
        return $users;
    }

    public static function getUsersNumber($conexion) {
        $users_total = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) AS total FROM users";

                $statement = $conexion->prepare($sql);
                $statement->execute();
                $result = $statement->fetch();

                $users_total = $result['total'];
            } catch (PDOException $ex) {
                print 'Error:' . $ex->getMessage();
            }
        }
        return $users_total;
    }

    public static function userInsert($conexion, $user) {
        $inserted_user = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO users(username, password, email, fecha_registro, activo, level) VALUES(:username, :password, :email, NOW(), 0, 2)";
                $statement = $conexion->prepare($sql);

                $var1 = $user->getUsername();
                $var2 = $user->getEmail();
                $var3 = $user->getPassword();


                $statement->bindParam(':username', $var1, PDO::PARAM_STR);
                $statement->bindParam(':email', $var2, PDO::PARAM_STR);
                $statement->bindParam(':password', $var3, PDO::PARAM_STR);

                $inserted_user = $statement->execute();
            } catch (PDOException $ex) {
                print'ERROR: ' . $ex->getMessage();
            }

            return $inserted_user;
        }
    }

    public static function issetUsername($conexion, $username) {
        $isset_username = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM users WHERE username = :username ";

                $statement = $conexion->prepare($sql);
                $statement->bindParam(':username', $username, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetchAll();

                if (count($result)) {
                    $isset_username = true;
                } else {
                    $isset_username = false;
                }
            } catch (Exception $ex) {
                print'ERROR: ' . $ex->getMessage();
            }
        }
        return $isset_username;
    }

    public static function issetEmail($conexion, $email) {
        $isset_email = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM users WHERE email = :email";

                $statement = $conexion->prepare($sql);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetchAll();

                if (count($result)) {
                    $isset_email = true;
                } else {
                    $isset_email = false;
                }
            } catch (Exception $ex) {
                print'ERROR: ' . $ex->getMessage();
            }
        }
        return $isset_email;
    }

    public static function getUserForEmail($conexion, $email_username ) {
        $user = null;

        if (isset($conexion)) {
            try {
                $sql = 'SELECT * FROM users WHERE email = :type OR username = :type';
                $statement = $conexion->prepare($sql);
                $statement->bindParam(':type', $email_username, PDO::PARAM_STR);
                $statement -> execute();
                $result = $statement -> fetch();
                if(!empty($result)){
                    $user = new User($result['id'],
                            $result['username'],
                            $result['password'],
                            $result['email'],
                            $result['fecha_registro'],
                            $result['activo'],
                            $result['level']
                            );
                    
                }
            } catch (Exception $ex) {
                print'ERROR: ' . $ex->getMessage();
            }
        }
        return $user;
    }

    public static function getUserForId($conexion, $id ) {
        $user = null;

        if (isset($conexion)) {
            try {
                $sql = 'SELECT * FROM users WHERE id = :id';
                $statement = $conexion->prepare($sql);
                $statement->bindParam(':id', $id, PDO::PARAM_STR);
                $statement -> execute();
                $result = $statement -> fetch();
                if(!empty($result)){
                    $user = new User($result['id'],
                            $result['username'],
                            $result['password'],
                            $result['email'],
                            $result['fecha_registro'],
                            $result['activo'],
                            $result['level']
                            );
                    
                }
            } catch (Exception $ex) {
                print'ERROR: ' . $ex->getMessage();
            }
        }
        return $user;
    }
}
