<?php

class SwordSkill extends SkillBase{
    public static $id = 1;
    const damage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::damage];
    }
}