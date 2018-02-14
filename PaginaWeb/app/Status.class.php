<?php

class Status {

    private $id;
    private $name_status;
    private $description;

    public function __construct($id, $name_status, $description) {
        $this->id = $id;
        $this->name_status = $name_status;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getNameStatus() {
        return $this->name_status;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setNameStatus($name_status) {
        $this->name_status = $name_status;
    }

    public function setDescription($description) {
        $this->descriptiom = $description;
    }

}
