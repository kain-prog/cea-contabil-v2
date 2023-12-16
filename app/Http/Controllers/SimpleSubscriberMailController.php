<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Mail\SubscriberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SimpleSubscriberMailController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->email;

        $data  = [
            'email' => $email,
            'mensagem' => "",
        ];

        $mail = new SubscriberMail( $data );
        $subjectSubscriber = "Consultoria Grátis";
        $mail->subject( $subjectSubscriber );

        Mail::to( 'ceacontabill@gmail.com' )->send( $mail );

        $data2 = [
            'email' => $email,
            'mensagem' => "client",
        ];

        Mail::to( $email )->send( new NotificationMail( $data2 ) );

        dd('E-mail enviado com sucesso!!');
    }
}
