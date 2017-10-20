<?php

/**
 * Default Route
 */
$app->get(
    '/',
    function () {
        /** @var \Phalcon\Mvc\View\Simple $view */
        $view = $this['view'];
        echo $view->render('index/index');
    }
);
