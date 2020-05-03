<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mensaje;
use App\MensajeVentas;

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
        
        
        $mensaje = Mensaje::create($request->all());
        $mensaje->save();

        return redirect('/');
    }


    // public function ventas(Request $request)
    // {

    //     $reglas = [
    //         "nombre" => "required|string",
    //         "telefono" => "required|numeric",
    //         "email" => "required|string",
    //         "pais" => "required|string",
    //         "provincia" => "required|string",
    //         "localidad" => "required|string",
    //         "razon" => "required|string",
    //         "mensaje" => "required|string"
    //     ];

    //     $mensajes = [
    //         "string" => "El campo :attribute debe ser un nombre.",
    //         "required" => "El campo :attribute es necesario.",
    //         "numeric" => "El :attribute debe ser numerico.",
    //     ];

    //     $this->validate($request, $reglas, $mensajes);

    //     $subject = "Asunto del correo";
    //     $for = "elzeke55@gmail.com";
    //     Mail::send('email.formulario-de-contacto-ventas',$request->all(),
    //     function($msj) use($subject,$for){
    //         $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de vendedores de orizon.com.ar");
    //         $msj->subject($subject);
    //         $msj->to($for);
    //     });
        
    //     $mensaje = MensajeVentas::create($request->all());
    //     $mensaje->save();

    //     return redirect('/');
    // }
    
    public function ventas(Request $request)
    {
        $messages = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute debe ser numerico.",
        ];
        $Validator = Validator::make(
            $request->all(),
            [
                "nombre" => "required|string",
                "telefono" => "required|numeric",
                "email" => "required|string",
                "pais" => "required",
                "provincia" => "required",
                "localidad" => "required",
                "razon" => "required",
                "mensaje" => "required",
            ],
            $messages
        );

        if($Validator->fails()) {

            $Response = $Validator->messages();

        } else {

            $subject = "Asunto del correo";
            $for = "elzeke55@gmail.com";
            Mail::send('email.formulario-de-contacto-ventas',$request->all(),
            function($msj) use($subject,$for){
                $msj->from("elzeke55@gmail.com","Mensaje desde el fomulario de vendedores de orizon.com.ar");
                $msj->subject($subject);
                $msj->to($for);
            });
            
            $mensaje = MensajeVentas::create($request->all());
            $mensaje->save();


            $Response = ['success' => 'El mensaje ha sido enviado con exito.'];
        }

        return Response()->json($Response, 200);
       
        
    }
} 
