<?php

abstract class BaseSkill {

    protected $_config = [];
    protected $_id = null;

    public function __construct($id){
        $config = new Phalcon\Config\Adapter\Php(CONFIG_FOLDER . 'skills/warriorSkillsConfig.php');
        $this->_config = (isset($config[$id])) ? $config[$id] : [];
    }

    abstract function getDescription($level);

}