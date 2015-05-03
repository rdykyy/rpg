<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => '54.72.29.116',
        'username'    => 'rpg_user',
        'password'    => '1q1q1q1q',
        'dbname'      => 'rpg',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'skillsDir'      => __DIR__ . '/../../app/models/Skills',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/',
        'staticUri'      => '/',
    )
));
