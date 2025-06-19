<?php

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Jobs\AppointmentNotificationJob;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        dispatch(new AppointmentNotificationJob([
            'appointment_id' => $appointment->id,
            'patient_id' => $appointment->patient_id,
            'doctor_id' => $appointment->doctor_id,
            'appointment_date' => $appointment->appointment_date,
            'appointment_time' => $appointment->appointment_time,
            'status' => $appointment->status,
        ]));

        return response()->json(['message' => 'Appointment created successfully!']);
    }
}
