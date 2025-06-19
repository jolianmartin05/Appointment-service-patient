<?php

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        Doctor::insert([
            ['name' => 'Dr. Budi Santoso', 'specialization' => 'Cardiology'],
            ['name' => 'Dr. Rina Wahyuni', 'specialization' => 'Neurology'],
            ['name' => 'Dr. Yudi Pranata', 'specialization' => 'Dermatology'],
        ]);
    }
}
