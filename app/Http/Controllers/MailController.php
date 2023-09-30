<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail From Habibur Rahman',
            'body' => 'This is for testing email using smtp',
        ];
        $mail = [
            'testing@gmail.com',
            'testing1@gmail.com',
            'testing2@gmail.com',
        ];

        // foreach ($mail as $key => $value) {
        //     Mail::to($value)->send(new DemoMail($mailData));
        // }
        
        for ($i=0; $i < count($mail); $i++) { 
            Mail::to($mail[$i])->send(new DemoMail($mailData));
        }
        
        dd('Email send successfully');
    }
}
