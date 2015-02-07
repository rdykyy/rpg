<?php

class Races extends \Phalcon\Mvc\Model {

    protected $id;

    protected $name;

    protected $image;

    protected $description;

    public function initialize(){
        $this->hasMany("id", "Heroes", "raceId");
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        $this->description;
    }

}