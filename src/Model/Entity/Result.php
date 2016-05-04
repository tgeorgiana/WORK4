<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

class Result {

    private $user;
    private $test;
    private $score;

    public function __construct($user, Test $test, $score) {
        $this->user=$user;
        $this->test=$test;
        $this->score=$score;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function setUser($user)
    {
        $this->user=$user;
    }
    
    public function getTest()
    {
        return $this->test;
    }
    
    public function setTest(Test $test)
    {
        $this->test=$test;
    }
    
    public function getScore()
    {
        return $this->score;
    }
    
    public function setScore($score)
    {
        $this->score=$score;
    }

}
