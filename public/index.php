<?php

register_shutdown_function( "fatal_handler" );

function fatal_handler() {


    $error = error_get_last();

    var_dump($error);die;
}

error_reporting(E_ALL);

//try {

    /**
     * Read the configuration
     */
    $config = include __DIR__ . "/../app/config/config.php";

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

//} catch (\Exception $e) {
//    echo $e->getMessage();
//}
