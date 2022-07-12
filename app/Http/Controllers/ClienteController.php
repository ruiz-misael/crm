<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class ClienteController extends Controller
{
   public function reservas(Request $request){
   	if($request->ajax()){
   	return view('cliente.reservaciones');
   }else{
   	return redirect::to('/');
   }
   }

   public function contacto(Request $request){
   	if($request->ajax()){
   	return view('cliente.chatbot');
   }else{
   	return redirect::to('/');
    }
   }
    public function informacion(Request $request){
   	if($request->ajax()){
   	return view('cliente.informacion');
   }else{
   	return redirect::to('/');
    }
   }
   public function renovacion(Request $request){
   	if($request->ajax()){
   	return view('cliente.chatbot');
   }else{
   	return redirect::to('/');
   }
   }
}

