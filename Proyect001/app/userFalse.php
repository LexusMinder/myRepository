<?php 

class userFalse {

    private $id;
    private $usernameOrEmail;
    private $password;
    private $fecha_registro;
    

    public function __construct($id, $usernameOrEmail, $password, $fecha_registro) {
        $this->id = $id;
        $this->usernameOrEmail = $usernameOrEmail;
        $this->password = $password;
        $this->fecha_registro = $fecha_registro;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->usernameOrEmail;
    }

    public function getPassword() {
        return $this->password;
    }


    public function getFechaRegistro() {
        return $this->fecha_registro;
    }


    public function setUsername($username) {
        $this->usernameOrEmail = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
      
}

