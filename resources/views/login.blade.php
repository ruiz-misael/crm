<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRM Activa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/styles.css') }} }}">
</head>
<body class="bg-light">
	<div class="d-flex justify-content-center p-5 my-3"  >
		<div class="col-lg-4 my-4" id="box">
		<div class="text-center">
		<img src="{{ asset('images/logo.png') }}" width="180px;">
		</div>
	
			<div class="row my-2 p-2">
				<div class="col-lg-12">
				<input class="form-control" id="usuario" placeholder="Usuario">
				</div>
			</div>
			<div class="row my-2 p-2">
				<div class="col-lg-12">
				<input class="form-control" id="password" placeholder="Password">
				</div>
			</div>
			<div class="d-grid gap-2 p-2">
  <a href="{{ url('cliente') }}">
  	<button class="btn btn-primary w-100" type="button" >Ingresa</button>
  </a>
  
</div>
<div class="pull-right">
	<a href="#">Registrate</a>
</div>
	</div>

	</div>


<style type="text/css" >
	#box{
		border:1px groove white;
		border-radius: 15px;
	}
	a{
		text-decoration: none;
	}
</style>
	
</style>	
</body>
</html>