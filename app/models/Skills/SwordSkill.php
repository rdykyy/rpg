<?php

class SwordSkill extends BaseSkill {

    private $attackPercent = 2;

    public function __construct(){
        $this->_id = 1;
        parent::__construct($this->_id);
    }

    public function getDescription($level) {
        return sprintf($this->_config['description'], $this->attackPercent * $level);
    }

}