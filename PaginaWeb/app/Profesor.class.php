<?php

class Profesor{
    private $enrollment;
    private $first_name;
    private $second_name;
    private $gender;
    private $birthdate;
    private $status_id;
    private $area_id;
    private $degree;
    private $users_id;
    
    public function __construct($enrollment, $first_name, $second_name, $gender, $birthdate, $status_id, $area_id, $degree_id, $users_id){
        $this->enrollment = $enrollment;
        $this->first_name = $first_name;
        $this->second_name = $second_name;
        $this->gender = $gender;
        $this->birthdate = $birthdate;
        $this->status_id = $status_id;
        $this->area_id = $area_id;
        $this->degree_id = $degree_id;
        $this->users_id = $users_id;
    }
    
    public function getEnrollment() {
        return $this->enrollemnt = $enrollment;
    }
    
    public function getFirstName() {
        return $this->first_name = $first_name;
    }
    
    public function getSecondName() {
        return $this->second_name = $second_name;
    }
    
    public function getGender() {
        return $this->gender = $gender;
    }
    
    public function getBirthdate() {
        return $this->birthdate = $birthdate;
    }
    
    public function getStatusId() {
        return $this->status_id = $status_id;
    }
    
    public function getUsersId() {
        return $this->users_id = $users_id;
    }
    
    public function getDegreeId() {
        return $this->degree_id = $degree_id;
    }
    
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    
    public function setSecondName($second_name) {
        $this->second_name = $second_name;
    }
    
    public function setGender($gender) {
        $this->gender = $gender;
    }
    
    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }
    
    public function setStatusId($status_id) {
        $this->status_id = $status_id;
    }
    
    public function setUsersId($users_id) {
        $this->users_id = $users_id;
    }
    
    public function setDegreeId($degree_id) {
        $this->degree_id = $degree_id;
    }
}
