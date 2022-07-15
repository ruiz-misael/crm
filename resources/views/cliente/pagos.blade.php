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
                    @endphp
                </center>
            </div>
        </div>
    </div>
</div>