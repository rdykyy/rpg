<?php

class AxeBrotherhoodSkill extends SkillBase{
    const id = 1;
    const damage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::damage];
    }

}