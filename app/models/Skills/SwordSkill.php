<?php

class SwordSkill {

    private static $id = 1;
    private static $attackPercent = 2;

    public static function getInfo($level = 0) {
        $info = (new Phalcon\Config\Adapter\Php(CONFIG_FOLDER . '/skills/skillsConfig.php'))->toArray()[self::$id];
        $info['level'] = $level;
        $info['description'] = sprintf($info['description'], self::$attackPercent * $level);
        return $info;
    }

}