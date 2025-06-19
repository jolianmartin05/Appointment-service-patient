<?php

namespace App\GraphQL\Queries;

use App\Models\Appointment;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class AppointmentQuery extends Query
{
    protected $attributes = [
        'name' => 'appointments',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Appointment'));
    }

    public function resolve($root, $args)
    {
        return Appointment::all();
    }
}
