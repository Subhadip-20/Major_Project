<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;

class EmailController extends Controller
{
    public function sendwelcomeEmail(){
        $toemail = 'dasanish523@gmail.com';
        $message = ' ';
        $subject = 'Your One-Time Password (OTP) for Cable Tv';
        $otp = mt_rand(1000,9999);

        $response = Mail::to($toemail)->send(new welcomeMail($message, $subject ,$otp));
        dd($response);
    }
}
