<?php

namespace App\Http\Controllers;
use App\Reservas;
use App\Membresias;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Session;
use Carbon\Carbon;
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
         $fecha=$request->fecha;
       
  
   	return view('cliente.reservaciones',["areas"=>$areas,"turnos"=>$turnos,"fecha"=>$fecha]);
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
         return json_encode(["reserva"=>"registrada","fecha"=>$fecha]);
       }else{
          return json_encode(["reserva"=>"no registrada","fecha"=>$fecha]);
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
      $tipo_membresia=DB::table("tipo_membresia")
      ->get();

   	return view('cliente.renovaciones',["tipo_membresia"=>$tipo_membresia]);
   }else{
   	return redirect::to('/');
   }
   }
      public function renovar(Request $request){
    if($request->ajax()){
    $tipo_membresia=$request->tipo_membresia;
$id_persona=Session::get('id_persona');
$fecha_inicio=Carbon::parse($request->fecha_inicio)->format('Y-m-d');
$fecha_fin=Carbon::parse($request->fecha_vencimiento)->format('Y-m-d');
$monto=$request->monto;
$id_asesor=$request->id_asesor;
$numero_cuotas=$request->numero_cuotas;
$pago_inicial=$request->pago_inicial

      return view('cliente.informacion');
   }else{
    return redirect::to('/');
   }
   }
     public function pagos(Request $request){
      if($request->ajax()){
      return view('cliente.pagos');
   }else{
      return redirect::to('/');
   }
   }


}

