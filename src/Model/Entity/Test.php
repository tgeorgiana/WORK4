<?php

namespace Entity;



class Test{
    
    private $id;
    private $title;
    private $questions;
    
    
    public function __construct($id,$title, array $questions)
    {
        $this->id=$id;
        $this->title=$title;
        $this->questions=$questions;
    }
    
    public function serialize() {
        return array(
            "id" => $this->id,
            "title" => $this->title,
            "questions" => $this->questions
        );
    }
    
    public function getId()
    {
        return $this->$id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title=$title;
    }
    
    public function getQuestions()
    {
        return $this->questions;
    }
    
  
    
}