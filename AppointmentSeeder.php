<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        Appointment::insert([
            [
                'patient_id' => 1,
                'doctor_id' => 2,
                'appointment_date' => '2025-06-15',
                'appointment_time' => '10:30:00',
                'status' => 'Pending'
            ],
            [
                'patient_id' => 2,
                'doctor_id' => 1,
                'appointment_date' => '2025-06-16',
                'appointment_time' => '11:00:00',
                'status' => 'Confirmed'
            ],
            [
                'patient_id' => 3,
                'doctor_id' => 3,
                'appointment_date' => '2025-06-17',
                'appointment_time' => '09:00:00',
                'status' => 'Canceled'
            ]
        ]);
    }
}
   

