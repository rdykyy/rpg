<?php

class Users extends \Phalcon\Mvc\Model {

    protected $id;

    protected $email;

    protected $passwordHash;

    public function initialize(){
        $this->hasMany("id", "Heroes", "userId");
    }

    public function getId() {
        return $this->id;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPasswordHash($password) {
        $this->passwordHash = $this->getDI()
            ->getSecurity()
            ->hash($password);
    }

    public function getPasswordHash(){
        return $this->passwordHash;
    }

    public function getSource() {
        return "users";
    }
}