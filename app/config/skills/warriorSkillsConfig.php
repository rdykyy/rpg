<?php

return [
    1 => [
        'name' => 'Удар мечом',
        'requiredLevel' => 1,
        'requiredSkill' => null,
        'type' => 'attack',
        'description' => "Урон от оружие типа 'Меч' увеличивается на %d%%.",

    ],
    2 => [
        'name' => 'Удар топором',
        'requiredLevel' => 1,
        'requiredSkill' => null,
        'type' => 'attack',
        'description' => "Урон от оружие типа 'Топор' увеличивается на %d%%."
    ],
    3 => [
        'name' => 'Берсерк',
        'requiredLevel' => 3,
        'requiredSkill' => 1,
        'type' => 'attack',
        'description' => "Увеличивает атаку на %d. Но при етом уменьшает защиту на %d."
    ],
    4 => [
        'name' => 'Круговой удар',
        'requiredLevel' => 3,
        'requiredSkill' => 2,
        'type' => 'attack',
        'description' => "Вы наносите дополньтельний урон %d%% 2 случайным врагам."
    ]
];