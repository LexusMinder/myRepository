<?php

class Degree{
    private $id;
    private $title;
    private $education_level;
    private $area;
    private $description;
    
    public function __construct($id, $title, $education_level, $area, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->education_level = $education_level;
        $this->area = $area;
        $this->description = $description;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getEducationLevel() {
        return $this->education_level;
    }
    
    public function getArea() {
        return $this->area;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setEducationLevel($education_level) {
        $this->education_level = $education_level;
    }
    
    public function setArea($area) {
        $this->area = $area;
    }
        
    public function setDescription($description) {
        $this->description = $description;
    }
    
}
