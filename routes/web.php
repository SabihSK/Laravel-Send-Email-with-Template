<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use App\Http\Controllers\Backend\EmailSubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-mail', function () {
    $details = [
        'title' => 'Mail from TBC (Title)',
        'body' => 'This is for testing email using smtp (body) without view.'
    ];

    Mail::to('sabih.sk1@gmail.com')->send(new MyTestMail($details));

    dd("Email is Sent.");
});

Route::get("/emailsubscription", [EmailSubscriptionController::class, 'sendSubscriptionEmail']);
