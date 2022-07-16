 @include('cliente.modal_pagar')  
 <div class="d-flex justify-content-center">
            <div class="card col-lg-12 my-3 ">
                
                <div class="d-flex justify-content-between">
  <div class="mr-auto p-2"><center><legend>Renovacion</legend></center></div>

                <hr>
     </div>
            </div></div>
            <div class="col-lg-12">
  <div class="row">
    <div class="col-lg-3">
<label>Seleccione tipo membresia</label>
    <select class="form-control" name="tipo_membresia" id="tipo_membresia" required>
      <option value="" selected="" disabled="">Seleccione membresia</option>
      @foreach($tipo_membresia as $t)
      <option value="{{ $t->idtipo_membresia }}" tiempo="{{ $t->tiempo }}" costo="{{ $t->costo }}" inicial="{{ $t->costo/ $t->tiempo }}">{{ $t->tipo_membresia.' '.$t->tiempo.' meses' }}</option>
      @endforeach 
    </select>
  </div>
  <div class="col-lg-2"><label>Fecha Inicio</label><input name="fecha_inicio" class="form-control" id="fecha_inicio" type="date" value="{{ Carbon\Carbon::parse('now')->format('Y-m-d') }}"></div>
  <div class="col-lg-2"><label>Fecha Vencimiento</label><input name="fecha_vencimiento" class="form-control" id="fecha_vencimiento" readonly=""></div>
  <div class="col-lg-2"><label>N° Cuotas</label><input name="numero_cuotas" class="form-control" id="numero_cuotas" readonly></div>
   <div class="col-lg-2"><label>Monto Cuotas</label><input name="monto_cuotas" class="form-control" id="monto_cuotas" readonly></div>
  <div class="col-lg-2"><label>Monto</label><input name="total" class="form-control" id="total" readonly></div>
  <div class="col-lg-4"><button class="btn my-3 btn-primary btn-block">Renovar</button></div>
</div>
 
</div>