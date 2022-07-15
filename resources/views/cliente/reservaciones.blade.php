 <div class="d-flex justify-content-center">
            <div class="card col-lg-12 my-3 ">
                
                <div class="d-flex justify-content-between">
  <div class="mr-auto p-2"><center><legend>Registro de Reservas</legend></center></div>

  <div class="p-2 col-lg-2"><input type="date" class="form-control" id="fecha" name="fecha" min="{{ Carbon\Carbon::parse('now')->format('Y-m-d')}}" value="{{ Carbon\Carbon::parse('now')->format('Y-m-d')}}"></div>
</div>
                <hr>
    
   <div class="wrapper my-0">
  <div class="tabs">
     @foreach($areas as $a) 
    <div class="tab">
      <input type="radio" name="css-tabs" id="{{ $a->id_areas }}" @if($a->id_areas == 1) checked @endif class="tab-switch">
      <label for="{{ $a->id_areas }}" class="tab-label">{{ $a->nombre }}</label>
      <div class="tab-content"> <table class="table table-condensed table-sm text-center table-striped">
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
          @if($fecha >= Carbon\Carbon::parse('now') || ($fecha >= Carbon\Carbon::parse('now') && $t->desde >= Carbon::parse('now')->format('H.i')) )
          <th id="{{ $t->idturnos.'-'.$amb->id_ambientes }}">
            @if(isset($consultaReserva)) 
             <b class="text-secondary">No Disponible</b>
            @else 
            <b>Disponible</b> <input type="checkbox"  class="reservar" name="turno[]" value="{{ $t->idturnos.'-'.$amb->id_ambientes }}">@endif </th>

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
       


<style>
    .wrapper {
   width: 100%;
  margin: 0 auto;
}
.tabs {
  position: relative;
  margin: 3rem 0;
  
  height: 14.75rem;
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #4723D9;
  border-right: 0.125rem groove white;
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}
.tab-content {
     width: 100%;
  
  position: absolute;
  z-index: 1;
  top: 2.75em;
  left: 0;
  padding: 1.618rem;
  background: #fff;
  color: #2c3e50;
  border-bottom: 0.25rem solid #bdc3c7;
  opacity: 0;
  transition: all 0.35s;
}
.tab-switch:checked + .tab-label {
  background: #fff;
  color: #2c3e50;
  border-bottom: 0;
  border-right: 0.125rem solid #fff;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}

</style>