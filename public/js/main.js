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
           	$("#contenido").html(response);
           		$("#loading").fadeOut();
           		console.log(response);
      
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
	
})

