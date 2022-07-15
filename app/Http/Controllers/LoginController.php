<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Session;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
class LoginController extends Controller
{
    public function login(Request $request){
    	if(Session::Get('activa') == true){
    		return redirect::to('cliente');
    	}
    	$usuario=$request->usuario;
    	$password=$request->password;

    	$auth=DB::table('usuario')
    	->where('usuario','=',$usuario)
    	->where('password','=',$password)
    	->first();


    	if($auth){
    		$persona=DB::table('persona')
    		->where('idpersona',"=",$auth->id_persona)
    		->first();

    		$request->session()->put('id_usuario', $auth->idusuario);
            $request->session()->put('id_persona', $persona->idpersona);
    		$request->session()->put('tipo_usuario', $auth->tipo_usuario);
    		$request->session()->put('nombre', $persona->cnom);
    		$request->session()->put('activa', true);
    		$request->session()->put('apellido', $persona->capepa);
			Alert::success('', 'Bienvenido');
            if($auth->tipo_usuario == 3){
    		return redirect::to('cliente');
            }
            if($auth->tipo_usuario == 1){
            return redirect::to('dashboard');
            }
    		
    	}else{
    		Alert::warning('Usuario no encontrado', 'revise sus datos');
    		return back();
    	}


    }

    public function logout(){
    	Session::flush();
    		Alert::success('', 'Hasta Luego');
    	return redirect::to('/');
    }
}
