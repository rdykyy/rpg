<?php

class CritycalStrikeSkill extends SkillBase
{
    const id = 7;
    const critChance = 2;
    const critValue = 2;


    protected static function getParametrizedInfo()
    {
        return [self::critChance, self::critValue];
    }

}