<?php

abstract class SkillBase {

    protected abstract static function getParametrizedInfo();

    public static function getInfo($level = 0) {
        $info = (new Phalcon\Config\Adapter\Php(CONFIG_FOLDER . '/skills/skillsConfig.php'))->toArray()[self::$id];
        $info['level'] = $level;
        $info['description'] = vsprintf($info['description'], self::getParametrizedInfo());
        return $info;
    }

}