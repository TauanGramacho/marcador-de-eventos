<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*criei uma nova rota e direcionei para tal*/

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});