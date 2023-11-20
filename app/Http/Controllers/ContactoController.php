<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    function contacto(Request $request){


      $contacto  =new Contacto();

      $contacto->name = $request->input('name');
      $contacto->email = $request->input('email');
      $contacto->telefono = $request->input('telefono');
      $contacto->asunto  = $request->input('asunto');
      $contacto->mensaje = $request->input('mensaje');

      $contacto->save();

      return redirect()->route('Contacto');
    }
}
