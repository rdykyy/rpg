<?php

return [
    //Sword skills
    1 => [
        'name' => 'Удар мечом',
        'requiredLevel' => 1,
        'requiredSkill' => null,
        'type' => 'attack',
        'description' => "Наносит по сопернику удар оружием типа <b>Меч</b> %d%% единиц урона.",
        'iconSrc' => ''
    ],
    2 => [
        'name' => 'Доблесть',
        'requiredLevel' => 3,
        'requiredSkill' => 1,
        'type' => 'attack',
        'description' => "Пассивно добавляет %d%% к показателю брони и %d%% к <b>Удар мечом</b>",
        'iconSrc' => ''
    ],
    3 => [
        'name' => 'Лидерство',
        'requiredLevel' => 5,
        'requiredSkill' => 2,
        'type' => 'attack',
        'description' => "Уменьшает случайным %d%% членам команды откаты умений и наносит <b>Удар мечом</b> по случайному сопернику",
        'iconSrc' => ''
    ],
    4 => [
        'name' => 'Ярость',
        'requiredLevel' => 6,
        'requiredSkill' => 3,
        'type' => 'attack',
        'description' => "Наносит по сопернику удар оружием типа <b>Меч</b> , равный %d%% (по %d%% за каждого павшего, максимум %d%%).",
        'iconSrc' => ''
    ],
    5 => [
        'name' => 'Скользящий удар',
        'requiredLevel' => 7,
        'requiredSkill' => 4,
        'type' => 'attack',
        'description' => "%d%% % вероятность атаковать случайного соседа цели, нанося ему %d%% единиц урона.",
        'iconSrc' => ''
    ],
    6 => [
        'name' => 'Раскол брони',
        'requiredLevel' => 9,
        'requiredSkill' => 5,
        'type' => 'attack',
        'description' => "Наносит по сопернику <b>Удар мечом</b>, понизив при этом его броню на %d%%.",
        'iconSrc' => ''
    ],
    7 => [
        'name' => 'Критический удар',
        'requiredLevel' => 10,
        'requiredSkill' => 6,
        'type' => 'attack',
        'description' => "Вероятность нанести критический удар повышена на %d%%. Сила критического удара повышена на %d%%",
        'iconSrc' => ''
    ],
    //Axe skills
    8 => [
        'name' => 'Удар топором',
        'requiredLevel' => 1,
        'requiredSkill' => null,
        'type' => 'attack',
        'description' => "Наносит по сопернику удар оружием типа <b>Топор</b> %d%% единиц урона.",
        'iconSrc' => ''
    ],
    9 => [
        'name' => 'Братство топора',
        'requiredLevel' => 2,
        'requiredSkill' => 8,
        'type' => 'attack',
        'description' => "Добавляет %d%% урона тем союзникам, у которых в руках оружие типа <b>Топор</b>",
        'iconSrc' => ''
    ],
    10 => [
        'name' => 'Рассечение',
        'requiredLevel' => 5,
        'requiredSkill' => 9,
        'type' => 'attack',
        'description' => "Наносит удар оружием типа <b>Топор</b>, после чего понижает атаку цели на %d%%",
        'iconSrc' => ''
    ],
    11 => [
        'name' => 'Берсерк',
        'requiredLevel' => 6,
        'requiredSkill' => 10,
        'type' => 'attack',
        'description' => "На %d%% ходов увеличивается показатель силы умения <b>Удар топором</b> на %d%%, теряя при ударе %d%% очков жизни",
        'iconSrc' => ''
    ],
    12 => [
        'name' => 'Круговой удар',
        'requiredLevel' => 7,
        'requiredSkill' => 11,
        'type' => 'attack',
        'description' => "Наносит всем соперникам <b>Удар топором</b>.",
        'iconSrc' => ''
    ],
    13 => [
        'name' => 'Удар по рукам',
        'requiredLevel' => 9,
        'requiredSkill' => 12,
        'type' => 'attack',
        'description' => "Выбранный враг на %d%% ходов не использует бонус оружия в руках",
        'iconSrc' => ''
    ],
    14 => [
        'name' => 'Звериный рёв',
        'requiredLevel' => 10,
        'requiredSkill' => 13,
        'type' => 'attack',
        'description' => "Увеличивает всей команде силу атаки на  %d%% и понижает соперникам броню на %d%%  на 2 хода",
        'iconSrc' => ''
    ],

];