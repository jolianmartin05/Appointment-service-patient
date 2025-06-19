<?php

use App\Http\Controllers\AppointmentController;

Route::post('/appointments', [AppointmentController::class, 'store']);


use Rebing\GraphQL\GraphQLController;

Route::post('/graphql', [GraphQLController::class, 'query']);

