<?php

class Classes extends \Phalcon\Mvc\Model {

    protected $classId;

    protected $name;

    protected $icon;

    protected $description;

    public function initialize(){
        $this->hasMany("classId", "Heroes", "classId");
    }

    public function getClassId() {
        return $this->classId;
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