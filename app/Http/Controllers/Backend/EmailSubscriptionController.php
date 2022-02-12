<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;

class EmailSubscriptionController extends Controller
{
    public function sendSubscriptionEmail()
    {

        $details = [
            'title' => 'Mail from TBC (Title)',
            'body' => 'This is for testing email using smtp (body) without view.'
        ];

        Mail::to('sabih.sk1@gmail.com')->send(new MyTestMail($details));
        // dd("Email is Sent.");

        return redirect('/');
    }
}
