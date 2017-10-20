<?php

/**
 * Galaxy list
 */

use Gameserver\Models\Galaxy;
use Gameserver\Services\JsonResponse;

$app->get(
    '/galaxy/list',
    function () {
        $galaxies = Galaxy::find()->toArray();
        echo JsonResponse::render(
            $galaxies,
            [
                'related_urls' => [
                    'solar_systems' => '/solar-system/list/{galaxy_id}',
                ],
            ]
        );
    }
);

