<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;


        if( empty( $name )){
            return redirect()->route('contact')->with( 'err-name2', 'O campo "nome" é obrigatório' )->withFragment('contact-form')->withInput();
        }

        if( empty( $email )){
            return redirect()->route('contact')->with( 'err-mail2', 'O campo "e-mail" é obrigatório.' )->withFragment('contact-form')->withInput();
        }
        
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL )){
            return redirect()->route('contact')->with( 'err-mail2', 'Por favor, insira um e-mail válido.' )->withFragment('contact-form')->withInput();
        }

        if( empty( $subject )){
            return redirect()->route('contact')->with( 'err-subj', 'O campo "mensagem" é obrigatório' )->withFragment('contact-form')->withInput();
        }

        if( empty( $message )){
            return redirect()->route('contact')->with( 'err-message2', 'O campo "mensagem" é obrigatório' )->withFragment('contact-form')->withInput();
        }


        $data  = [
            'nome' => $name,
            'assunto' => $subject,
            'email' => $email,
            'mensagem' => $message
        ];

        $mail = new Sendmail($data);
        $mail->subject($subject);

        Mail::to( 'contato@ceacontabil.com' )->send( $mail );

        $data2 = [
            'nome' => $name,
            'mensagem' => "client",
            'original' => "y"
        ];

        Mail::to( $email )->send( new NotificationMail( $data2 ));
                
        return redirect()->route('contact')->with( 'succ-form3', 'Agradecemos pelo contato! Recebemos a sua mensagem.' )->withFragment('contact-form')->withInput();

    }
}
