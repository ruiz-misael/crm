
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="width: 800px !important;" aria-hidden="true" >
  <div class="modal-dialog modal-xlmodal-dialog-centered modal-dialog-scrollable"role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asistente Virtual</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <div class="modal-body" >
        <div id="mensajeria" ></div>
       <div class="row">
         <div class="col-lg-2"><img src="{{ asset('images/activin.svg') }}"><p>Activin</p></div>
         <div class="col-lg-10 ml-2" id="recibido"><p>Hola soy Activin tu asesor virtual,  
brindame tu nombre y tu DNI para ayudarte</p><i class="text-secondary fechas">{{ Carbon\Carbon::parse('now')->format('Y-m-d H:i') }}</i></div>
       </div>
      
       </div>             

       <div class="modal-footer"></div>
     <div class="row p-2">
      <form id="chatbot">
       <div class="input-group">
    <textarea class="form-control custom-control" id="mensaje" rows="3" required style="resize:none"></textarea>     
    <button class="input-group-addon btn btn-primary" id="enviar" type="btn">Enviar</button>
</div>
</form>
     </div>
        </div>       
      </div>
    </div>
<style type="text/css">
  #recibido{
    border: 1px groove white;
    border-top-left-radius:5%;
    border-top-right-radius:5%;
    border-bottom-right-radius:5%;
    border-bottom-left-radius:5%;
    background-color: #f3f3f3;
  }

    #enviado{
    border: 1px groove white;
    border-top-left-radius:5%;
    border-top-right-radius:5%;
    border-bottom-right-radius:5%;
    border-bottom-left-radius:5%;
    background-color: #d2d2d2;
  }
  .fechas{
    font-size: 8px;
  }
</style>