<?php

class Comment {

    private $id;
    private $title;
    private $user_id;
    private $comment_id;
    private $text;
    private $entry_date;
    
    function __construct($id, $title, $user_id, $comment_id, $text, $entry_date) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->comment_id = $comment_id;
        $this->text = $text;
        $this->entry_date = $entry_date;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getUserId() {
        return $this->user_id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getCommentId() {
        return $this->comment_id;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function getEntryDate() {
        return $this->entry_date;
    }
    
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
    
    public function setCommenId($comment_id) {
        $this->comment_id = $comment_id;
    }
    
    public function setText($text) {
        $this->text= $text;
    }

}
