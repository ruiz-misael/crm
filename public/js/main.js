$(document).ready(function(){

	function reservas(){
		var fecha= $("#fecha").val();
		$("#loading").show();
		var url='reservas';
  
		  $.ajax({                 
       url: url,
       type: "GET",
       data:{fecha:fecha},      
     dataType: "html",    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){
           	$("#fecha").val(response.fecha);
           	$("#contenido").html(response);
           		$("#loading").fadeOut();
           		console.log(response);
      
           }
           })     
	}

  function informacion(){

    var url='informacion';
  
      $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
             $("#loading").show();
           },success:function(response){
             $("#contenido").html(response);
               $("#loading").fadeOut();
     
           }
           })     
  }
	
	$("#cliente_reservas").click(function(){
	
		reservas();
	})

	$(document).on('change', '#fecha',function(){
	
		reservas();
	})

	$("#cliente_informacion").click(function(){
	
    informacion();
	})

	$("#cliente_contacto").click(function(){
	
		var url='informacion';
  
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
           	$("#loading").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loading").fadeOut();
     
           }
           })     

	})
	$("#cliente_pagos").click(function(){
	
		var url='pagos';
  
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
           	$("#loading").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loading").fadeOut();
     
           }
           })     

	})
$(document).on('click', '.reservar', function(){
	Swal.fire({
  title: 'Desear Reservar el area seleccionada?',
  showCancelButton: true,
  confirmButtonText: 'Confirmar',
  denyButtonText: `Cancelar`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
  	var url='reservar';
  	var fecha=$("#fecha").val();
  	var id=$(this).val();
  	 $("#"+id).html('No Disponible');
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "json",
      data: {
                     fecha: fecha,
                     id: id,
               
                  },    
         beforeSend: function() {
           	$("#loading").show();
           },success:function(response){
           		$("#fecha").val(response.fecha)
           		$("#loading").fadeOut();
           		console.log(response)
     			 Swal.fire('Reserva registrada!', '', 'success')
           }
           })    
 
   
   
  } else if (result.isDenied) {
    Swal.fire('Reserva cancelada', '', 'info')
  }
})
	

}); 

$(document).on('click', '#cliente_renovacion', function(){
	$("#loading").show();
		var url='renovacion';
  
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loading").fadeOut();
      
           }
           })   
})

$(document).on('submit', '#chatbot', function(event){
	event.preventDefault();
	var mensajes=$("#mensaje").val();
	var fecha= new Date().toLocaleString();
	$("#mensaje").val('');
	var cliente1='<div class="row my-2"> <div class="col-lg-10" id="enviado"><p>'+mensajes+'</p>';
	var cliente2='<i class="text-secondary fechas">'+fecha+'</i></div>';
	var cliente3=' <div class="col-lg-2" ><img src="images/user.svg"><p>Tu</p></div></div>';
	$(".modal-body").append(cliente1+cliente2+cliente3);
	var url='chatbot';
	 $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "json",
     data:{
     	mensaje:mensajes
     },    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){

           	var fecha= new Date().toLocaleString();
			$("#mensaje").val('');
			console.log(response)
			var activin=response.respuesta;
			var asistente1=' <div class="row my-2"> <div class="col-lg-2" ><img src="images/activin.svg"><p>Activin</p></div>';
			var asistente2=' <div class="col-lg-10" id="recibido"><p>'+activin+'</p>';
			var asistente3='<i class="text-secondary fechas">'+fecha+'</i></div></div>';
           	$(".modal-body").append(asistente1+asistente2+asistente3);
           	$('#modal').animate({ scrollTop: $('#modal .modal-dialog').height() }, 500);
           	$("#loading").fadeOut();

           }
           })  
	
})

$(document).on('change', '#tipo_membresia', function(event){
var costo=$("#tipo_membresia option:selected").attr("costo");
var tiempo=parseInt($("#tipo_membresia option:selected").attr("tiempo"));
var fecha_iniciO=$("#fecha_inicio").val();
var monto_cuotas=costo/tiempo;
console.log(tiempo);

// Añades los meses

let fecha_fin = moment(fecha_iniciO).add(tiempo, 'M').format('YYYY-MM-DD')
$("#fecha_vencimiento").val(fecha_fin);
$("#numero_cuotas").val(tiempo);
$("#monto_cuotas").val(monto_cuotas);
$("#total").val(costo);


})

$(document).on('submit', '#renovacion', function(event){
      event.preventDefault();

      var datos=$("#renovacion").serialize();
      console.log(datos);
})
	
})

