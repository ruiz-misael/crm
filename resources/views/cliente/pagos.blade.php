<div class="d-flex justify-content-center">
    <div class="card col-lg-12 my-3 ">
        <div class="d-flex justify-content-between">
            <div class="mr-auto p-2">
                <center>
                    <legend>
                        Planeacion de Pagos
                    </legend>
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
                </center>

                
            </div>
        </div>
        <table class="table table-condensed table-bordered table-striped table-hover w-100">
                    <tr class="bg-primary text-white text-center">
                        <th>Cuota N°</th><th>Importe</th><th>Fecha Pago</th><th>Codigo</th><th>Descripcion</th><th>Fecha Cancelacion</th><th>Importe Total</th>
                    </tr>
                    @for($i=1;$i<=$membresias->numero_cuotas;$i++)
                    <tr class="text-center">
                        <td><input type="radio" name="cuota">{{ $i }}</td>
                        <td>@if($i==1) S/{{ number_format(($membresias->monto-$membresias->pago_inicial)/$membresias->numero_cuotas,2) }} @else S/{{ number_format($membresias->monto/$membresias->numero_cuotas,2) }}@endif</td>
                        <td>{{$fechaInicio->addMonth($i)->format('Y-m-d') }}</td>
                        <td>{{ str_pad($membresias->idmembresias.$membresias->tipo_membresia.$i, 8, "0", STR_PAD_LEFT) }}</td>
                        <td>{{'Cuota N°'.$i.' '.$tipoMembresia->tipo_membresia }}</td>
                        <td>{{$fechaInicio->addMonth($i+1)->format('Y-m-d') }}</td>
                        <td>S/{{ number_format($membresias->monto/$membresias->numero_cuotas,2) }}</td>
                    </tr>
                    @endfor
                </table>
          <div class="col-lg-12 text-right p-2">
              <button class="btn btn-sm btn-primary ">Ir a pagar</button>
          </div>      
    </div>
</div>