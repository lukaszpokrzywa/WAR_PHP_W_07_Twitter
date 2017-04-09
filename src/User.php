<?php

class User 
{
    private $id;
    private $username;
    private $email;
    private $hashPass;
    
    public function __construct() {
        $this->id = -1;
        $this->username = '';
        $this->email = '';
        $this->hashPass = '';
    }
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getHashPass() {
        return $this->hashPass;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setHashPass($hashPass) {
        $this->hashPass = $hashPass;
    }
    
    public function setPassword($password) {
        $this->hashPass = password_hash($password, PASSWORD_BCRYPT);
        
    }
}

