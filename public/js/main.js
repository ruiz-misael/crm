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
           	console.log(response);
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
           	console.log(response);
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
           	console.log(response);
           }
           })     

	})
})

