<?php

class HonorshipSkill extends SkillBase {
    const id = 2;
    const additionalArmor = 2;
    const additionalSwordSkillDamage = 2;


    protected static function getParametrizedInfo()
    {
        return [self::additionalArmor, self::additionalSwordSkillDamage];
    }

}