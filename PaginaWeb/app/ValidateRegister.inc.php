<?php
include_once 'app/UserRepository.inc.php';

class ValidateRegister {

    private $username;
    private $email;
    private $username_error;
    private $email_error;
    private $password1_error;
    private $password2_error;
    private $start_notice;
    private $end_notice;

    public function __construct($username, $email, $password1, $password2, $conexion) {
        $this->username = "";
        $this->email = "";
        $this->password = "";
        $this->start_notice = "<br><div class='alert alert-danger' role='alert'>";
        $this->end_notice = '</div>';

        $this->username_error = $this->validateUsername($conexion,$username);
        $this->email_error = $this->validateEmail($conexion, $email);
        $this->password1_error = $this->validatePassword1($password1);
        $this->password2_error = $this->validatePassword2($password1, $password2);
    
        if ($this-> password1_error === "" && $this-> password2_error === "" ) {
            $this->password = $password1;
        }
        
    }

    private function initializadVar($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    private function validateUsername($conexion, $username) {
        if (!$this->initializadVar($username)) {
            return "!Debes de escribir un nombre de usuario.";
        } else {
            $this->username = $username;
        }

        if (strlen($username) < 6) {
            return "El nombre debe ser de más de 6 caracteres.";
        }

        if (strlen($username) > 24) {
            return "El nombre NO debe de tener mas de 24 caracteres";
        }
        if(UserRepository :: issetUsername($conexion, $username)){
            return 'Este nombre de usuario ya esta registrado. Porfavor intente con otro.';
        }
        return "";
    }

    private function validateEmail($conexion, $email) {
        if (!$this->initializadVar($email)) {
            return "Debes proporcionar un email";
        } else {
            $this->email = $email;
        }
        if(UserRepository :: issetEmail($conexion, $email)){
            return "Este nombre de email ya esta registrado. Porfavor intente con otro o <a href='#' >intente recuperar su contraseña.</a>";
        }
        return "";
    }

    private function validatePassword1($password1) {
        if (!$this->initializadVar($password1)) {
            return "Debes proporcionar una contraseña";
        } else {
            $this->password1 = $password1;
        }
        return "";
    }
    

    private function validatePassword2($password1, $password2) {
        if (!$this->initializadVar($password1)) {
            return "Debes proporcionar una contraseña";
        }

        if (!$this->initializadVar($password2)) {
            return "Debes proporcionar una contraseña";
        }
        if ($password1 !== $password2) {
            return "Las contraseñas deben de coincidir";
        }
        return "";
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this-> password;
    }

    public function getUsernameError() {
        return $this->username_error;
    }

    public function getEmailError() {
        return $this->email_error;
    }

    public function getPassword1Error() {
        return $this->password1_error;
    }

    public function getPassword2Error() {
        return $this->password2_error;
    }

    public function showUsername() {
        if ($this->username !== "") {
            echo $this->username;
        }
    }

    public function showUsernameError() {
        if ($this->username_error !== "") {
            echo $this->start_notice . $this->username_error . $this->end_notice;
        }
    }

    public function showEmail() {
        if ($this->email !== "") {
            echo $this->email;
        }
    }

    public function showEmailError() {
        if ($this->email_error !== "") {
            echo $this->start_notice . $this->email_error . $this->end_notice;
        }
    }

    public function showPassword1Error() {
        if ($this->password1_error !== "") {
            echo $this->start_notice . $this->password1_error . $this->end_notice;
        }
    }

    public function showPassword2Error() {
        if ($this->password2_error !== "") {
            echo $this->start_notice . $this->password2_error . $this->end_notice;
        }
    }

    public function validateRegister() {
        if ($this->username_error === "" &&
                $this->email_error === "" &&
                $this->password1_error === "" &&
                $this->password2_error === "") {

            return true;
        } else {
            return false;
        }
    }

}
