<?php
return [
    'initializers' => [
        'Strapieno\Place\Model\PlaceModelInitializer'
    ],
    'invokables' => [
        'Strapieno\Place\Model\Validator\EntityExist' => 'Strapieno\Place\Model\Validator\EntityExist',
        'Strapieno\Utils\Validator\Latitude' => 'Strapieno\Utils\Validator\Latitude',
        'Strapieno\Utils\Validator\Longitude' => 'Strapieno\Utils\Validator\Longitude'
    ],
    'aliases' => [
        'Placeentityexist' => 'Strapieno\Place\Model\Validator\EntityExist',
        'latitude' => 'Strapieno\Utils\Validator\Latitude',
        'longitude' => 'Strapieno\Utils\Validator\Longitude'
    ],
];