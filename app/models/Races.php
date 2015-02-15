<?php

class Races extends \Phalcon\Mvc\Model {

    protected $raceId;

    protected $name;

    protected $image;

    protected $description;

    public function initialize(){
        $this->hasMany("raceId", "Heroes", "raceId");
    }

    public function getRaceId() {
        return $this->raceId;
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