<?php

class AxeSkill extends SkillBase{
    const id = 1;
    const damage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::damage];
    }
}