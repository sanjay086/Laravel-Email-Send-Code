<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function sendmail(){
        $mailData = [
            'title' => 'Mail from testmail',
            'body' => 'This is for testing email using smtp',
        ];
        Mail::to('sanjaykumaryadav199191@gmail.com')->send(new DemoMail($mailData));
        dd('Email send Successfully.');
    }
}
