<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function enviar(Request $request)
    {
        // dd($request->all());
        // $reglas = [
        //     "apellido" => "required|string",
        //     "nombre" => "required|string",
        //     "empresa" => "required|string",
        //     "cuit" => "required|numeric",
        //     "localidad" => "required|string",
        //     "telefono" => "required",
        //     "email" => "required"
        // ];

        // $mensajes = [
        //     "string" => "El campo :attribute debe ser un nombre.",
        //     "required" => "El campo :attribute es necesario.",
        //     "numeric" => "El :attribute debe ser numerico.",
        // ];

        // $this->validate($request, $reglas, $mensajes);

        // $newMail = new ContactEmail();

        // $newMail->apellido = $request["apellido"];
        // $newMail->nombre = $request["nombre"];
        // $newMail->empresa = $request["empresa"];
        // $newMail->cuit = $request["cuit"];
        // $newMail->localidad = $request["localidad"];
        // $newMail->telefono = $request["telefono"];
        // $newMail->email = $request["email"];
        // $newMail->consulta = $request["consulta"];

        // $newMail->save();


        $subject = "Asunto del correo";
        $for = "elzeke55@gmail.com";
        
        Mail::send('email.formulario-de-contacto',$request->all(),
        function($msj) use($subject,$for){
            $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de orizon.com.ar");
            $msj->subject($subject);
            $msj->to($for);
        });
        
        return view('/');
    }


    public function ventas(Request $request)
    {
       
        $reglas = [
            "nombre" => "required|string",
            "telefono" => "required|numeric",
            "email" => "required|string",
            "pais" => "required|string",
            "provincia" => "required|string",
            "localidad" => "required|string",
            "razon" => "required|string",
            "mensaje" => "required|string"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute debe ser numerico.",
        ];

        $this->validate($request, $reglas, $mensajes);

        // $newMail = new ContactEmail();

        // $newMail->apellido = $request["apellido"];
        // $newMail->nombre = $request["nombre"];
        // $newMail->empresa = $request["empresa"];
        // $newMail->cuit = $request["cuit"];
        // $newMail->localidad = $request["localidad"];
        // $newMail->telefono = $request["telefono"];
        // $newMail->email = $request["email"];
        // $newMail->consulta = $request["consulta"];

        // $newMail->save();

        dd($request->all());
        $subject = "Asunto del correo";
        $for = "elzeke55@gmail.com";
        Mail::send('email.formulario-de-contacto-ventas',$request->all(),
        function($msj) use($subject,$for){
            $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de orizon.com.ar");
            $msj->subject($subject);
            $msj->to($for);
        });
        
        return view('contacto');
    }
}
