<?php

class SkillFactory {

    public static $config = [
        1 => 'SwordSkill'
    ];

    public static $_id = null;

    public static function getSkillByIdAndLevel($id, $level = null) {
        return forward_static_call_array(array(self::$config[$id], 'getInfo'), array($level));
    }

}