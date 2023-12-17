<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Mail\SubscriberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class SimpleSubscriberMailController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->email;

        if( empty( $email )){
            return redirect()->route('home')->with( 'err', 'Por favor, insira o seu e-mail.' )->withFragment('cta')->withInput();
        }
        
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL )){
            return redirect()->route('home')->with( 'err', 'Por favor, insira um e-mail válido.' )->withFragment('cta')->withInput();
        }

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

        return redirect()->route('home')->with( 'succ', 'A sua mensagem foi enviada com sucesso!' )->withFragment('cta');
    }
}
