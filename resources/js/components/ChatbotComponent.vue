<template>
	<div class="d-flex justify-content-center">
			<div class="card col-lg-8 my-3 ">
				<center>Asistente Virtual</center>
				<div class="card-body">
					<div class="row bg-light"  id="panelChat">
						
					</div>
					<div class="row my-2">
						<div class="input-group">
			<textarea type="text"  class="form-control" cols="1" rows="1" placeholder="Ingresa tu consulta..." name="mensaje" required id="boxMensaje"></textarea>
			<div class="input-group-append">
				<button class="btn btn-block" style="background-color:#0077A0;color:white;">Enviar</button>
			</div>
		</div>
					</div>
				</div>
			</div>
		</div>
	<!--
	<div class="d-flex justify-content-center bg-light">
		<div class="col-lg-8">
			<div class="card my-3">
				<div class="card-body" id="panelChat"></div>
			</div>
		</div>
	</div>
	<div class="input-group">
			<textarea type="text"  class="form-control" placeholder="Ingresa tu mensaje..." name="mensaje" required id="boxMensaje"></textarea>
			<div class="input-group-append">
				<button class="btn btn-block" style="background-color:#0077A0;color:white;">Enviar</button>
			</div>
		</div>
	</div>
-->
</template>
<style>
#panelChat{
	height: 55vh;
}
 textarea{
 width:200px;
 
 }	
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
