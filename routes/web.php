<?php

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

Route::get('send-mail', function () {

    $user = [
        'name' => 'Websolutionstuff',
        'info' => 'This is gmail example in laravel 9'
    ];

    \Mail::to('flanceitlab@gmail.com')->send(new \App\Mail\GmailTestMail($user));

    dd("Successfully send mail..!!");

});