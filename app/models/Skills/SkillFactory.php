<?php

class SkillFactory {

    public static $config = [
        1 => 'SwordSkill',
        2 => 'HonorshipSkill',
        3 => 'LeadershipSkill',
        4 => 'RageSkill',
        5 => 'SlidingStrikeSkill',
        6 => 'ArmorBreakSkill',
        7 => 'CritycalStrikeSkill',
        8 => 'AxeSkill',
        9 => 'AxeBrotherhoodSkill',
        10 => 'DissectionSkill',
        11 => 'BerserkSkill',
        12 => 'CircularStrikeSkill',
        13 => 'HandsStrikeSkill',
        14 => 'AnimalRoarSkill'
    ];

    public static $_id = null;

    public static function getSkillByIdAndLevel($id, $level = null) {
        return forward_static_call_array(array(self::$config[$id], 'getInfo'), array($level));
    }

}