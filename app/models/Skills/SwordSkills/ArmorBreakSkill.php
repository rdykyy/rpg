<?php

class ArmorBreakSkill extends SkillBase
{
    const id = 6;
    const armorReduce = 2;

    protected static function getParametrizedInfo()
    {
        return [self::armorReduce];
    }
}