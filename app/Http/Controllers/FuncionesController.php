<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Session;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
class FuncionesController extends Controller
{
    public function chatbot(Request $request){
    		if($request->ajax()){

    $mensaje=$request->mensaje;			
   	 $membresias=DB::Table('membresias')
        ->where('id_persona','=',Session::get('id_persona'))
        ->orderBy('idmembresias',"DESC")
        ->first();
        $tipoMembresia=DB::Table('tipo_membresia')
        ->where('idtipo_membresia','=',$membresias->idmembresias)
        ->first();
        $pago=DB::Table('pagos')
        ->where('id_membresia','=',$membresias->idmembresias)
        ->first();

		$asesor=DB::Table('persona')
        ->where('idpersona','=',$membresias->id_asesor)
        ->first();

        $info=DB::Table('persona')
        ->where('idpersona','=',Session::get('id_persona'))
        ->first();



        $dependientes=DB::Table('dependientes')
        ->where('id_membresia','=',$membresias->idmembresias)
        ->get();

        $fechaInicio=Carbon::parse($membresias->fecha_inicio);
        $fechaFin=Carbon::parse($membresias->fecha_fin);
    

    $fecha_actual = date("Y-m-d");  
    $s = strtotime($fechaFin)-strtotime($fecha_actual);  
    $d = intval($s/86400);  
    $diferencia = $d; 

   if (str_contains($mensaje, 'membresia') 	|| str_contains($mensaje, 'membr') || str_contains($mensaje, 'vencimiento')) {
    $respuesta="Estimad@ tienes tu membresia $tipoMembresia->tipo_membresia vence el $membresias->fecha_fin recuerda estar al dia con tus cuotas para disfrutar de beneficios ";
}elseif(str_contains($mensaje, 'hola') 	|| str_contains($mensaje, 'que tal') || str_contains($mensaje, 'salud')) {
	$respuesta="Hola  $info->cnom encantado de poder ayudarte, indicame que necesitas saber para brindarte informacion";
}
elseif(str_contains($mensaje, 'chanchas') 	|| str_contains($mensaje, 'canchas disponible') || str_contains($mensaje, 'canch')) {
	$respuesta="Para que fecha deseas saber si hay disponibilidad?";
}

else{
	$respuesta="No entiendo tu pregunta";
}


   	return  response()->json(["respuesta"=>$respuesta]);
   }else{
   	return redirect::to('/');
   }
    }
}
