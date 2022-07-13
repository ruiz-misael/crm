$(document).ready(function(){


$("#loader").show();
	
	$("#cliente_reservas").click(function(){
	
		var url='reservas';
  
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loader").fadeOut();
      
           }
           })     

	})

	$("#cliente_informacion").click(function(){
	
		var url='informacion';
  
		  $.ajax({                 
       url: url,
       type: "GET",      
     dataType: "html",    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loader").fadeOut();
     
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
           	$("#loader").show();
           },success:function(response){
           	$("#contenido").html(response);
           		$("#loader").fadeOut();
     
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
     dataType: "html",
      data: {
                     fecha: fecha,
                     id: id,
               
                  },    
         beforeSend: function() {
           	$("#loader").show();
           },success:function(response){
           	
           		$("#loader").fadeOut();
           		console.log(response)
     			 Swal.fire('Reserva registrada!', '', 'success')
           }
           })    
 
   
   
  } else if (result.isDenied) {
    Swal.fire('Reserva cancelada', '', 'info')
  }
})
	

}); 
	
})

