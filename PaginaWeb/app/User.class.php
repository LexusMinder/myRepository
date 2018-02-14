<?php

class User {

    private $id;
    private $username;
    private $password;
    private $email;
    private $fecha_registro;
    private $level;

    public function __construct($id, $username, $password, $email, $fecha_registro, $level) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->fecha_registro = $fecha_registro;
        $this->level = $level;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaRegistro() {
        return $this->fecha_registro;
    }

    public function getLevel() {
        return $this->level;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
       
    public function setLevel($level) {
        $this->level = $level;
    }
}
