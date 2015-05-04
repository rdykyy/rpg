<?php

class DissectionSkill extends SkillBase{
    const id = 1;
    const armorReduce = 2;


    protected static function getParametrizedInfo()
    {
        return [self::armorReduce];
    }
}