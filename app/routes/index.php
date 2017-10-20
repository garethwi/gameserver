<?php

/**
 * Default Route
 */
$app->get(
    '/',
    function () use ($app) {
        /** @var \Phalcon\Mvc\View\Simple $view */
        $view = $app['view'];
        echo $view->render('index/index');
    }
);
