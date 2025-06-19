<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AppointmentNotificationJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $appointmentData;

    public function __construct(array $appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    public function handle(): void
    {
        Log::info('Processing Appointment Message:', $this->appointmentData);

        $client = new \GuzzleHttp\Client();
        $client->post('http://localhost:8080/v1/graphql', [
            'headers' => [
                'Content-Type' => 'application/json',
                'x-hasura-admin-secret' => 'your_admin_secret_here'
            ],
            'json' => [
                'query' => 'mutation InsertAppointment($object: appointments_insert_input!) { insert_appointments_one(object: $object) { id } }',
                'variables' => [
                    'object' => $this->appointmentData,
                ]
            ]
        ]);
    }
}
