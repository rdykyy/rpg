<?php

class HandsStrikeSkill extends SkillBase{
    const id = 1;
    const turns = 2;


    protected static function getParametrizedInfo()
    {
        return [self::turns];
    }
}