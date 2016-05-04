<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Utils;

class Session {
    
   private $session;

   
   public function __construct()
   {
       $this->session = $_SESSION;

   }
   
   public function setSession($user)
   {
       $this->session['user']=$user;
   }
   
   public function unsetSession()
   {
       $this->session['$user']="";
       session_destroy();
    }
}
