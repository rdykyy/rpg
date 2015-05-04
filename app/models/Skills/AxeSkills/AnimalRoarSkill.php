<?php

class AnimalRoarSkill extends SkillBase{
    const id = 1;
    const damage = 2;
    const armorDecrease = 2;


    protected static function getParametrizedInfo()
    {
        return [self::damage, self::armorDecrease];
    }

}