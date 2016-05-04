<?php

namespace Controller;

use Repository\UserRepository as UserRepository;
use Entity\User as User;
use Utils\Validate as Validate;
use Utils\MyException as MyException;

class UserController
{
    private $repository;
    private $validate;
    
    function __construct(UserRepository $repo, Validate $validate) {
        $this->repository= $repo;
        $this->validate = $validate;
    }
    
    function add ($username, $password, $name, $email, $role)
    {
        if($this->repository->found($username)!=="")
        {
            throw new MyException("The username already exist.");
        }
        
        if(!$username)
        {
            throw new MyException ("Username can not be null.");
        }
        
        if (!$password)
        {
            throw new MyException ("Password can not be null.");
        }
        
        if (!$name)
        {
            throw new MyException ("Name can not be null.");
        }
        
        if (!$email)
        {
            throw new MyException ("E-mail can not be null.");
        }
        
        if($this->validate->validateEmail($email)===false)
        {
            throw new MyException ("The email is not valid.");
        }

        $user = new User($username, $password, $name, $email, $role);

        $this->repository->save($user);

    }
    
    
    public function verifyPassword($username,$password)
    {
        $data = $this->repository->found($username);

        if($data ==="")
        {
            throw new MyException("The username do not exist.");
        }
        
        else
        {
            if($data['password']!=$password)
            {
                throw new MyException("The password is incorect!");
            }
        
        }
        
    }
    
    public function verifyAdmin($username)
    {
        $data = $this->repository->found($username);
        
        if($data !== "")
        {
            if($data['role']!=='admin')
            {
                throw new MyException("Not an admin user.");
            }
        }
    }
            
    
    public function startUserSession($username)
    {
        
        $_SESSION['user'] = $username;
 
    }
    
    public function startAdminSession($username)
    {
        
        $_SESSION['admin'] = $username;
 
    }
    
    
    
    
    
    
    
    

}

