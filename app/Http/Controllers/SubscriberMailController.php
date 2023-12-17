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

        if( empty( $name )){
            return redirect()->route('home')->with( 'err-name', 'O campo "nome" é obrigatório' )->withFragment('form-2')->withInput();
        }

        if( empty( $email )){
            return redirect()->route('home')->with( 'err-mail', 'O campo "e-mail" é obrigatório.' )->withFragment('form-2')->withInput();
        }
        
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL )){
            return redirect()->route('home')->with( 'err-mail', 'Por favor, insira um e-mail válido.' )->withFragment('form-2')->withInput();
        }

        if( empty( $message )){
            return redirect()->route('home')->with( 'err-message', 'O campo "mensagem" é obrigatório' )->withFragment('form-2')->withInput();
        }

        $data  = [
            'nome' => $name,
            'email' => $email,
            'mensagem' => $message,
            'assunto' => "Consultoria Grátis"
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

        return redirect()->route('home')->with( 'succ-form-2', 'A sua mensagem foi enviada com sucesso!' )->withFragment('form-2')->withInput();
        
    }
}
