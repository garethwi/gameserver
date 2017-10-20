<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

include_once('routes/index.php');
include_once('routes/galaxy.php');
include_once('routes/solarSystem.php');
include_once('routes/world.php');
include_once('routes/map.php');
include_once('routes/resource.php');

/**
 * Not found handler
 */
$app->notFound(
    function () use ($app) {
        $app->response->setStatusCode(404, "Not Found");
        $app->response->sendHeaders();
        echo $app['view']->render('error/404');
    }
);

