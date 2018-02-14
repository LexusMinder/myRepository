<?php 

class Homework {

    private $id;
    private $title;
    private $profesor_id;
    private $description;
    private $entry_date;
    private $delivery_date;
            
    function __construct($id, $title, $profesor_id, $description, $entry_date, $delivery_date) {
        $this->id = $id;
        $this->title = $title;
        $this->profesor_id = $profesor_id;
        $this->description = $description;
        $this->entry_date = $entry_date;
        $this->delivery_date = $delivery_date;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getProfesorId() {
        return $this->profesor_id;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function getEntryDate() {
        return $this->entry_date;
    }
    
    public function getDeliveryDate() {
        return $this->delivery_date;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setProfesorId($profesor_id) {
        $this->profesor_id = $profesor_id;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function setEntryDate($entry_date) {
        $this->entry_date = $entry_date;
    }
    
    public function setDeliveryDate($delivery_date) {
        $this->delivery_date = $delivery_date;
    }
    
}
