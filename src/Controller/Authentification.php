<?php

namespace Controller;

use Controller\UserController;

use Utils\Request;

use Utils\MyException;

class Authentification
{
    private $controller;
    private $request;
    
    public function __construct(UserController $controller, Request $request) {
        $this->controller = $controller;
        $this->request = $request;
    }
    
    
    public function register()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('pass');
        $name = $this->request->post('name');
        $email = $this->request->post('email');
        $role = 'user';
        
        try{
                   
            $this->controller->add($username, $password, $name, $email, $role);
            
        } catch (MyException $e) {
            
            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
            header("Refresh:2; url=view/viweregister.html");
            exit();
        }


        
    }
    
    public function login()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('pass'); 
        
        try{
            $this->controller->verifyPassword($username,$password);
            $this->controller->startUserSession($username);

         
        } catch (MyException $e) {
            
            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
            header("Refresh:2; url=view/viewlogin.html");
            exit();

        }
    }
    
        public function loginAdmin()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('pass'); 
        
        try{
            $this->controller->verifyPassword($username,$password);
            $this->controller->verifyAdmin($username);
            $this->controller->startAdminSession($username);

         
        } catch (MyException $e) {
            
            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
            header("Refresh:2; url=view/viewLoginAdmin.html");
            exit();

        }
    }
    
    public function logoutUser()
    {
        $_SESSION['user']="";
        session_destroy();
        header("Refresh:2; url=view/viewlogin.html");
        exit();
        
    }
    
    public function logoutAdmin()
    {
        $_SESSION['admin']="";
        session_destroy();
        header("Location: view/viewlogin.html");
        exit();
        
    }
}