<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

/** @noinspection PhpUndefinedVariableInspection */
$loader->registerDirs(
    [
        $config->application->modelsDir
    ]
);
$loader->register();

$loader->registerNamespaces(
    [
        'Gameserver\Models' => $config->application->modelsDir,
        'Gameserver\Services' => $config->application->servicesDir,
    ]
);
$loader->register();
