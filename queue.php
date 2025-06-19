<?php

return [



        'connections' => [
    'rabbitmq' => [
        'driver' => 'rabbitmq',
        'queue' => env('RABBITMQ_QUEUE', 'appointment_queue'),
        'connection' => PhpAmqpLib\Connection\AMQPStreamConnection::class,

        'hosts' => [
            [
                'host' => env('RABBITMQ_HOST', '127.0.0.1'),
                'port' => env('RABBITMQ_PORT', 5672),
                'user' => env('RABBITMQ_USER', 'rahasia123'),
                'password' => env('RABBITMQ_PASSWORD', 'rahasia123'),
                'vhost' => '/',
            ],
        ],

        'options' => [
            'exchange' => [
                'name' => env('RABBITMQ_EXCHANGE_NAME', 'appointments'),
                'type' => 'direct',
                'declare' => true,
            ],
        ],
    ],
