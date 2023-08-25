<?php

use App\Events\AntrianEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('call-event', function () {
    $data = [
        'title' => 'Tutorial Laravel Websockets',
        'event' => 'Antria Event',
        'author' => 'nexterid'
    ];
    Broadcast(new AntrianEvent($data));
});
