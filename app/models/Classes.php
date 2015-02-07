<?php

class Classes extends \Phalcon\Mvc\Model {

    protected $id;

    protected $name;

    protected $icon;

    protected $description;

    public function initialize(){
        $this->hasMany("id", "Heroes", "classId");
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getDescription() {
        $this->description;
    }

}