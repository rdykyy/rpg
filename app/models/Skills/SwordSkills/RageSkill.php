<?php

class RageSkill extends SkillBase{
    const id = 4;
    const damagePerFallen = 2;
    const maximumDamage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::damagePerFallen, self::maximumDamage];
    }
}