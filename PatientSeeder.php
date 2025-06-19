<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::insert([
            ['name' => 'Ali Rahman', 'email' => 'ali@gmail.com', 'phone' => '08123456789'],
            ['name' => 'Dina Maulida', 'email' => 'dina@yahoo.com', 'phone' => '08129876543'],
            ['name' => 'Sinta Dewi', 'email' => 'sinta@gmail.com.com', 'phone' => '08212345678'],
        ]);
    }
}
