<html>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>CRM Activa</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body className='snippet-body'>
      <body id="body-pd">
        <header class="header" id="header">
          <div class="header_toggle"> <i class='bx bx-menu bx-sm' id="header-toggle"></i> </div><img src="{{ asset('images/logo.png') }}" width="120px">
           
                <div class="d-flex justify-content-end" valign="middle">
                    <div valign="middle">{{ Session::get('nombre').' '.Session::get('apellido') }} </div> <div class="header_img"><img src="{{ asset('images/user.svg') }}" alt=""></div></div>
        </header>
        <div class="l-navbar" id="nav-bar">
          <nav class="nav">
            <div>
              <a href="#" class="nav_logo">
                <span class="nav_logo-name"></span> </a>
                <div class="nav_list">
                  <a href="#" class="nav_link active"> <i class='bx bxs-briefcase bx-sm'></i> <span class="nav_name">Servicios</span> </a> 
                  <a href="#" class="nav_link"><i class='bx bx-user-circle bx-sm'></i> <span class="nav_name">Empleados</span> </a> 
                  <a href="#" class="nav_link"> <i class='bx bx-time-five bx-sm'></i> <span class="nav_name">Reservas</span> </a> 
                  <a href="#" class="nav_link"> <i class='bx bxs-report bx-sm'></i> <span class="nav_name">Reportes</span> </a> 
                  <a href="#" class="nav_link"><i class='bx bxs-message-dots  bx-sm'></i> <span class="nav_name">Chatbox</span> </a> 
                  <!--<a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> -->
                </div>
              </div><a href="{{ url('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon bx-sm'></i> <span class="nav_name">Cerrar Sesion</span> </a>
            </nav>
          </div>
          <!--Container Main start-->
          <div class="height-100 bg-light" id="contenido">
           <div class="card">
            <div class="card-body" id="content">

            </div>
          </div>
        </div>
        <!--Container Main end-->
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function(event) {

          const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
  toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
  if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
  }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});
        </script>
        <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
          e.preventDefault();
        });
        </script>

      </body>
      </html>