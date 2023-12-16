<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberMailController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $data  = [
            'nome' => $name,
            'email' => $email,
            'mensagem' => $message,
        ];

        $mail = new Sendmail( $data );
        $subjectSubscriber = "Consultoria Grátis";
        $mail->subject( $subjectSubscriber );

        Mail::to( 'ceacontabill@gmail.com' )->send( $mail );

        $data2  = [
            'nome' => $name,
            'mensagem' => "client",
        ];

        Mail::to( $email )->send( new NotificationMail( $data2 ) );

        dd('E-mail enviado com sucesso!!');
    }
}
