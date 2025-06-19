<?php

namespace App\GraphQL\Types;

use App\Models\Appointment;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class AppointmentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Appointment',
        'description' => 'A type for appointments',
        'model' => Appointment::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'patient_id' => [
                'type' => Type::int(),
            ],
            'doctor_id' => [
                'type' => Type::int(),
            ],
            'appointment_date' => [
                'type' => Type::string(),
            ],
            'appointment_time' => [
                'type' => Type::string(),
            ],
            'status' => [
                'type' => Type::string(),
            ],
            'created_at' => [
                'type' => Type::string(),
            ],
            'updated_at' => [
                'type' => Type::string(),
            ],
        ];
    }
}
