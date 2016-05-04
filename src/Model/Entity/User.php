<?php

namespace Entity;

class User {

    private $username;
    private $password;
    private $name;
    private $email;
    private $role;

    public function __construct($username = null, $password = null, $name = null, $email = null, $role = null) {

        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function serialize() {
        return array(
            "username" => $this->username,
            "password" => $this->password,
            "name" => $this->name,
            "email" => $this->email,
            "role" => $this->role
        );
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }

}
