<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail; //importante incluir la clase Mail ya que será la responsable de enviar el email

class EmailController extends Controller
{
    public function contact(Request $request) {
        $subject = "Correo enviado desde formulario";
        $for = "juanjoinkor@gmail.com";
        $from = "juadrigarciagonzalez@gmail.com";
        Mail::send("email", $request->all(), function($msg) use($subject, $for, $from){
            $msg->from($from, $from);
            $msg->subject($subject);
            $msg->to($for);
        });

        return redirect()->back();
    }
}
