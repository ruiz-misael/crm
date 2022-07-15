<div class="d-flex justify-content-center">
    <div class="card col-lg-12 my-3 ">
        <div class="d-flex justify-content-between">
            <div class="mr-auto p-2">
                <center>
                    <legend>
                        Mi Información
                    </legend>
                </center>
            </div>
        </div>
        <hr>
        @php
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

        $fechaInicio=Carbon\Carbon::parse($membresias->fecha_inicio);
        $fechaFin=Carbon\Carbon::parse($membresias->fecha_fin);
        $restantes= dias_restantes($fechaFin);

        function dias_restantes($fecha_final) {  
    $fecha_actual = date("Y-m-d");  
    $s = strtotime($fecha_final)-strtotime($fecha_actual);  
    $d = intval($s/86400);  
    $diferencia = $d;  
    return $diferencia;  
}  
        @endphp
        <div class="col-lg-12">
        	<div class="row">
        		<h3><b>{{ $tipoMembresia->tipo_membresia }}</b></h3>
        	</div>
        	<div class="row">
        		<div class="col-lg-4"><b>Numero de orden de Venta:</b> #{{ str_pad($pago->idpagos, 8, "0",STR_PAD_LEFT )  }}</div>
        		<div class="col-lg-2"></div>
        		<div class="col-lg-3"><b>Asesor Comercial:</b> {{ $asesor->cnom.' '.$asesor->capepa.' '.$asesor->cpapemat }}</div>
        		<div class="col-lg-3"></div>
        	</div>
        	<div class="row">
        		<div class="col-lg-3"><b>Fecha Inicio:</b> {{ Carbon\Carbon::parse($membresias->fecha_inicio)->format('d-m-Y') }}</div>
        		<div class="col-lg-3"><b>Fecha Fin:</b> {{ Carbon\Carbon::parse($membresias->fecha_fin)->format('d-m-Y') }}</div>
        		<div class="col-lg-3"><b>Pago Inicial:</b> {{ $membresias->pago_inicial }}</div>
        		<div class="col-lg-3"><b>Importe Total:</b> {{ $membresias->monto }}</div>
        	</div>
        	<div class="row">
        		<div class="col-lg-3"><b>Numero Contrato:</b>0000</div>
        		<div class="col-lg-3"><b></b></div>
        		<div class="col-lg-3"><b>Numero de Cuotas:</b> {{ $membresias->numero_cuotas }}</div>
        		<div class="col-lg-3"><b></b></div>
        	</div>
        	<div class="row">
        		<div class="col-lg-3"><b>Estado Membresia:</b>@if($membresias->fecha_fin >= Carbon\Carbon::parse('now')->format('Y-m-d')) VIGENTE @endif</div>
        		<div class="col-lg-3"><b></b></div>
        		<div class="col-lg-3"><b>Importe Cuotas:</b> {{ $membresias->monto/$membresias->numero_cuotas  }}</b></div>
        		<div class="col-lg-3"><b></b></div>
        	</div>
        </div>
        <hr>
        <div class="row">
        		<div class="col-lg-4"><h5><b>TITULAR:</b> {{ $info->cnom.' '.$info->capepa.' '.$info->cpapemat  }}</h5></div>
        		<div class="col-lg-4"><h5><b>DNI:</b> {{ $info->cnumdoc }}</h5></div>
        		<div class="col-lg-4"><h5><b>CORREO:</b> {{ $info->correo }}</h5></div>

        	
        	</div>
        	@foreach($dependientes as $dep)
        	<div class="row">
        		<div class="col-lg-3"><b>Dependiente:</b> {{  $dep->nombres.' '.$dep->apellidos }}</div>
        		<div class="col-lg-3"><b>Parentezco</b>  {{  $dep->parentezco }}</div>
        		<div class="col-lg-2"><b>DNI:</b> {{  $dep->dni }}</div>
        		<div class="col-lg-2"><b>Telefono</b> {{  $dep->telefono }}</div>
        		<div class="col-lg-2"><b>Correo</b> {{  $dep->correo }}</div>
        	</div>
        	@endforeach
        	<hr>
        	<div class="row p-3">
        	<center><h3>Tu membresia tiene @if($restantes > 0 ) <b class="text-primary">{{ $restantes}}</b> @else <b class="text-warning">0 </b>@endif dias restantes <button class="btn btn-primary " id="cliente_renovacion">Renovar</button></h3></center>
        </div>
    </div>
</div>