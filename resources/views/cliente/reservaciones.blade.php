 <div class="d-flex justify-content-center">
            <div class="card col-lg-12 my-3 ">
                
                <div class="d-flex justify-content-between">
  <div class="mr-auto p-2"><center><legend>Registro de Reservas</legend></center></div>

  <div class="p-2 col-lg-2"><input type="date" class="form-control" id="fecha" name="fecha" min="{{ Carbon\Carbon::parse('now')->format('Y-m-d')}}" @if(isset($fecha)) value="{{ $fecha }}" @else value="{{ Carbon\Carbon::parse('now')->format('Y-m-d')}}"  @endif></div>
</div>
                <hr>
    
   <div class="wrapper my-0">
  <div class="tabs">
     @foreach($areas as $a) 
    <div class="tab">
      <input type="radio" name="css-tabs" id="{{ $a->id_areas }}" @if($a->id_areas == 1) checked @endif class="tab-switch">
      <label for="{{ $a->id_areas }}" class="tab-label">{{ $a->nombre }}</label>
      <div class="tab-content"> <table class="table table-hover table-bordered table-condensed table-sm text-center table-striped">
      @php
        $ambientes=DB::Table('ambientes_areas')
        ->where('id_areas','=',$a->id_areas)
        ->get();
        @endphp
         <tr class="bg-info text-white">
          <th></th>
          @foreach($ambientes as $amb)
          <th>{{ $amb->ambiente }}</th>
        @endforeach</tr>
        @foreach($turnos as $t)        
        <tr style="white-space: nowrap;">
          <th >{{ "De ".$t->desde." a ".$t->desde }}</th>
          @foreach($ambientes as $amb)
          @php
          $consultaReserva=DB::table('reservas')
          ->where('id_ambiente','=',$amb->id_ambientes)
          ->where('turno','=',$t->idturnos)
          ->where('fecha_reserva','=',$fecha)->first();
          @endphp
          @if($fecha >= Carbon\Carbon::parse('now') || (Carbon\Carbon::parse('now') && $t->desde > Carbon\Carbon::parse('now')->format('H.i')) )
          <th id="{{ $t->idturnos.'-'.$amb->id_ambientes }}">
            @if(isset($consultaReserva)) 
             <b class="text-secondary">No Disponible</b>
            @else 
            <b class="text-primary">Disponible</b> <input type="checkbox"  class="reservar" name="turno[]" value="{{ $t->idturnos.'-'.$amb->id_ambientes }}">@endif </th>

            @endif
          @endforeach
        </tr>
        @endforeach
     </table>    </div>
    </div>   
    @endforeach
  </div>

</div>
                </div>
            </div>
