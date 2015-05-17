<?php

class SlidingStrikeSkill extends SkillBase{
    const id = 5;
    const possibility = 2;
    const damage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::possibility, self::damage];
    }
}