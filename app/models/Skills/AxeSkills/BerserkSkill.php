<?php

class BerserkSkill extends SkillBase{
    const id = 1;
    const turns = 1;
    const damage = 2;
    const hpLose = 20;

    protected static function getParametrizedInfo()
    {
        return [self::turns, self::damage, self::hpLose];
    }

}