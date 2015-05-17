<?php

abstract class SkillBase {

    //protected abstract function getParametrizedInfo();

    public static function getInfo($level = 0) {
        //var_dump(self::$id);
        $info = (new Phalcon\Config\Adapter\Php(CONFIG_FOLDER . '/skills/skillsConfig.php'))->toArray()[static::id];
        $info['level'] = $level;
        $info['description'] = vsprintf($info['description'], static::getParametrizedInfo());
        return $info;
    }

}