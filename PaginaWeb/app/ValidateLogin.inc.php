<?php

include_once 'app/UserRepository.inc.php';

class ValidateLogin {

    private $user;
    private $error;

    public function __construct($email_username, $password, $conexion) {
        $this->error = "";

        if (!$this->initializadVar($email_username) || !$this->initializadVar($password)) {
            $this->user = null;
            $this->error = 'You must introduce your email or username and password';
        } else {
            $this->user = UserRepository::getUserForEmail($conexion, $email_username );
            
            if(is_null($this->user) || !password_verify($password, $this->user->getPassword())){
                $this-> error = "Your username/email o password are incorrects";
                        
            }
            
        }
    }

    private function initializadVar($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getUser(){
        return $this-> user;
    }
    
    public function getError(){
        return $this-> error;
    }
    
    public function showError(){
        if($this-> error !== ""){
            echo "<br><div class='alert alert-danger' role='alert'>";
            echo $this->error;
            echo '</div><br>';
        }
    }

}
