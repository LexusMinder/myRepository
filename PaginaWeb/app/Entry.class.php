<?php

class Entry {

    private $id;
    private $title;
    private $user_id;
    private $url;
    private $text;
    private $entry_date;
    private $comment_id;
            
    function __construct($id, $title, $user_id, $url, $text, $entry_date, $comment_id) {
        $this->id = $id;
        $this->title = $title;
        $this->user_id = $user_id;
        $this->url = $url;
        $this->text = $text;
        $this->entry_date = $entry_date;
        $this->comment_id = $comment_id;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getUserId() {
        return $this->user_id;
    }
    
    public function getUrl() {
        return $this->url;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function getEntryDate() {
        return $this->entry_date;
    }
    
    public function getCommentId() {
        return $this->comment_id;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setUserId($user_id) {
        $this->user_id= $user_id;
    }
    
    public function setUrl($url) {
        $this->url= $url;
    }
    
    public function setText($text) {
        $this->text= $text;
    }
    
    public function setEntryDate($entry_date) {
        $this->entry_date = $entry_date;
    }
    
    public function setCommentId($comment_id) {
        $this->comment_id = $comment_id;
    }
}
