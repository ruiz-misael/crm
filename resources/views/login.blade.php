<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRM Activa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
   <script type='text/javascript' src='{{ asset('js/sweetalert.min.js') }}'></script>
       <script src="{{ asset('js/main.js') }}"></script>
</head>
<body >

	<form id="loginForm" method="POST" action="{{ url('login') }}">
	<div class="d-flex justify-content-center p-5 my-5"  >
		{{ csrf_field() }}
		<div class="col-lg-4 my-4  p-3 bg-light" id="box">
		<div class="text-center">
		<img src="{{ asset('images/logo.png') }}" width="180px;">
		</div>
	
			<div class="row my-2 p-2">
				<div class="col-lg-12">
				<input class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
				</div>
			</div>
			<div class="row my-2 p-2">
				<div class="col-lg-12">
				<input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
				</div>
			</div>
			<div class="d-grid gap-2 p-2">

  	<button class="btn btn-primary w-100" type="submit" >Ingresa</button>

  
</div>
<div class="col-lg-12 text-right">
	<a href="#">Registrate</a>
</div>
	</div>
</form>
	</div>


<style type="text/css" >
	#box{
		border:1px groove #4723D9;
		border-radius: 15px;
	}
	a{
		text-decoration: none;
	}

	body{
		background: #4723D9;
	}
</style>

	@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>
</html>