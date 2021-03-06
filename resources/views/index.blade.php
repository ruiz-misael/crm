@include('loader')

<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CRM Activa</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fuentes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
    <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
  


        <body id="body-pd">

  <div class="cajaf">
  <a href="#" class="btn_roundf"  data-toggle="modal" data-target="#exampleModal" title="Contacta tu asistente virtual" >Contacta tu asistente virtual <img src="{{ asset('images/chat.svg') }}" width="40px"></a>
</div>
            <header class="header" id="header">
               <div class="header_toggle" > <i class='bx bx-menu bx-sm' id="header-toggle"></i> </div><img src="{{ asset('images/logo.png') }}" width="80px">
               
                <div class="d-flex justify-content-end" valign="middle">
                    <div valign="middle">{{ Session::get('nombre').' '.Session::get('apellido') }} </div> <div class="header_img"><img src="{{ asset('images/user.svg') }}" alt=""></div></div>
            </header>
            
            <div class="l-navbar" id="nav-bar" >
                <nav class="nav">
                    <div>
                        <a href="#" class="nav_logo">
                            <span class="nav_logo-name"></span> </a>
                            <div class="nav_list">
                                <a href="#" class="nav_link active" id="cliente_informacion"><i class='bx bxs-info-circle bx-sm'></i> <span class="nav_name">Mi Info</span> </a> 
                                <a href="#" class="nav_link" id="cliente_pagos"> <i class='bx bxs-dock-left bx-sm'></i><span class="nav_name">Planeacion Pagos</span> </a> 
                                <a href="#" class="nav_link" id="cliente_reservas"> <i class='bx bx-time-five bx-sm'></i> <span class="nav_name">Reservas</span> </a> 
                                <a href="#" class="nav_link" id="cliente_promociones"> <i class='bx bx-bookmark nav_icon bx-sm'></i> <span class="nav_name">Promociones</span> </a> 
                                <a href="#" class="nav_link" id="eventos"> <i class='bx bx-folder nav_icon bx-sm'></i> <span class="nav_name">Proximos Eventos</span> </a> 
                                <!--<a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
                            </div>
                        </div><a href="{{ url('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon bx-sm'></i> <span class="nav_name">Cerrar Sesion</span> </a>
                    </nav>
                </div>
                <!--Container Main start-->
 @include('cliente.chatbot')  
                <div class="height-100 bg-light" id="app">
                    <div class="card my-3">
                  <div class="card-body" id="contenido">
                <center class="my-2"><h3 class="text-primary">Bienvenid@</h3></center>
                <center><img src="{{  asset('images/AF5.jpg') }} " width="860px;"></center>
               
                </div>
            </div>
        </div>
        <!--Container Main end-->
 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type='text/javascript' src="{{ asset('js/styles.js') }}"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
  </html>