<?php

namespace App\Http\Controllers;
use App\Reservas;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Session;
class ClienteController extends Controller
{
	public function cliente(){
		if(Session::get('activa') == true){
			return view('index');
		}else{
			return redirect::to('login');
		}
		
	}
   public function reservas(Request $request){
   	if($request->ajax()){
   		$areas=DB::table('areas_reservables')
   		->get();
   		$turnos=DB::table('turnos')
   		->get();
   	return view('cliente.reservaciones',["areas"=>$areas,"turnos"=>$turnos]);
   }else{
   	return redirect::to('/');
   }
   }
   public function reservar(Request $request){
      if($request->ajax()){
      $fecha=$request->fecha;
      $id=explode("-",$request->id);
      $turno=$id[0];
      $ambiente=$id[1];

      $reserva=new Reservas;
       $reserva->fecha_reserva=$fecha;
      $reserva->id_ambiente=$ambiente;
      $reserva->turno=$turno;
      $reserva->id_usuario=Session::get('id_usuario');
       $reserva->usuario_registro=Session::get('id_usuario');
       $reserva->save();

       if($reserva){
         return json_encode(["reserva"=>"registrada"]);
       }else{
          return json_encode(["reserva"=>"no registrada"]);
       }

      
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

