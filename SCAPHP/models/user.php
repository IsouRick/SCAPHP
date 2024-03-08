<?php

class User {
    private $email;
    private $passWord;   
    
    public function __construct($email, $passWord) {
        $this->email = $email;
        $this->passWord = password_hash($passWord, PASSWORD_DEFAULT);
    }

    public function getEmail() {
        return $this->email;
    }

    public function validatePassword($passWord) {
        return password_verify($passWord, $this->passWord);
    }
}