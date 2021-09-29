<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail; //importante incluir la clase Mail ya que será la responsable de enviar el email

class EmailController extends Controller
{
    public function contact(Request $request) {
        
        Mail::send("email", $request->all(), function($msg) {
            $subject = "Asunto del correo";
            $for = "Correo que recibirá el mensaje";

            $msg->from("tucorreo@gmail.com", "Nombre que aparecerá como emisor");
            $msg->subject($subject);
            $msg->to($for);
        });

        return redirect()->back();
    }
}
