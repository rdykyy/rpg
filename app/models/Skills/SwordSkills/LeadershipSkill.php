<?php

class LeadershipSkill extends SkillBase {
    const id = 3;
    const numberOfTeammates = 1;

    protected static function getParametrizedInfo()
    {
        return [self::numberOfTeammates];
    }
}