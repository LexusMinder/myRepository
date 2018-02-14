<?php 

class Area{
    private $id;
    private $area_name;
    private $coordinator;
    
    public function __construct($id, $area_name, $coordinate){
        $this->id = $id;
        $this->area_name = $area_name;
        $this->coordinator = $coordinate;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getAreaName() {
        return $this->area_name;
    }
    
    public function getCoordinator() {
        return $this->coordinator;
    }
    
    public function setAreaName($area_name) {
        return $this->area_name = $area_name;
    }
    
    public function setCoordinator($coordinator) {
        return $this->coordinator = $coordinator;
    }
}
