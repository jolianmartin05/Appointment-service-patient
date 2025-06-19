<?php

return [
    'schemas' => [
        'default' => [
            'query' => [
                'appointments' => \App\GraphQL\Queries\AppointmentQuery::class,
            ],
        ],
    ],

    'types' => [
        'Appointment' => \App\GraphQL\Types\AppointmentType::class,
    ],
];
