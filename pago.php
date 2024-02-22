<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Confirmación</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="distribution" content="global" />
  <meta name="author" content="Hostal La Posada">
  <meta name="contact" content="Central: 996 558 046" />
  <meta name="keywords" content="Hotel en Chancay, Alojamiento en Chancay, Habitaciones de Hotel, Servicios de Hotel, Reservas en Chancay, Hospedaje de Calidad, Estancia Confortable, Turismo en Chancay, Viaje a Chancay, Descanso y Relax, Hotel con Vistas al Mar, Turismo Chancay" />
<meta name="description" content="Bienvenido al Hotel en Chancay, donde ofrecemos alojamiento de calidad, servicios excepcionales y una estancia confortable. Disfruta de nuestras habitaciones con vistas al mar, realiza reservas para tu viaje a Chancay y experimenta el mejor turismo en la zona. ¡Te esperamos para brindarte un descanso inolvidable!" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/1821e531a3.js" crossorigin="anonymous"></script>
  <!-- Stylesheets-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="floating-icons">
      <a href="https://www.facebook.com/profile.php?id=61552875982829" class="text-center facebook-color facebook-background"><i class="fab fa-facebook"></i></a>
      <a href="https://wa.me/966558046/?text=Hola, me da información sobre el hospedaje?" class="text-center whatsapp-color whatsapp-background"><i class="fab fa-whatsapp"></i></a>
      <a href="https://www.instagram.com/hospedaje_laposada/" class="text-center instagram-color instagram-background"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@laposadahospedaje" class="text-center tiktok-color tiktok-background"><i class="fab fa-tiktok"></i></a>
    </div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <!--HEADER / INCIO-->
    <link href='css/style.css' rel='stylesheet' type='text/css'>

    <body class="stretched">
      <div id="wrapper" class="clearfix">

        <!-- Header-->
        <?php include_once('in/header.php'); ?><!--Fin Header-->
        <!-- Preloader-->
        <div id="preloader">
          <div id="status">
            <div class="status-mes"></div>
          </div>
        </div>
      </div>
      <!--HEADER / FINAL-->

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Confirmación</h2>
          </div>
          <div class="box-position" style="background-image: url(img/Reserva/reserva.jpeg);"></div>
        </div>
      </section>

      <!--*******-->

      
<h3 class="pb-1">Sus Datos</h3>
<div class="container mb-3">
    <div class="row">
        <div class="col-md-6">
            <!-- Contenido del primer cuadro -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Registrese</h5>
                <form>
                  <div class="form-group">
                    
                        <p class="">Tipo de Documento:</p>
                        <button type="button" href="#" data-toggle="modal" data-target="#modaldni" class="btn btn-primary btn-sm">DNI</button>
                        <button type="button" href="#" data-toggle="modal" data-target="#modalruc" class="btn btn-primary btn-sm">RUC</button>
                      </div>
                    </form>
                    
                    <div class="row justify-content-center">
                      <div class="col-md-8">

                      <form id="searchForm">
                      <div class="mb-3">
                      <label for="document_number">DNI o RUC:</label>
                      <input type="text" name="document_number" class="form-control" id="document_number" required>
                      </div>
                      <input type="button" value="Buscar" onclick="buscarDocumento()">
                      </form>
                      
                      <label>Nombre:</label>
                      <input class="form-control" id="resultadosName"required disabled>

                        <form action="procesar_reserva.php" method="post">
                      <div class="mb-2">
                        <label>Fecha de check-in:</label>
                        <input type="date" class="form-control" id="checkin_date" required>
                      </div>

                          <div class="mb-2">
                    <label>Hora de check-in:</label>
                    <input type="time" name="checkin_time" class="form-control" id="checkin_time" required>
                  </div>
                
                  <div class="mb-3">
                    <label for="checkout_date" class="">Fecha de check-out:</label>
                    <input type="date" class="form-control" id="checkout_date" required>
                  </div>

                  <div class="mb-3">
                    <label for="checkout_time" class="">Hora de check-out:</label>
                    <input type="time" name="checkout_time" class="form-control" id="checkout_time" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="id_room" class="">ID de la habitación:</label>
                    <input type="text" name="id_room" class="form-control" id="id_room" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="id_room" class="">Precio habitación</label>
                    <input type="text" name="id_price_room" class="form-control" id="price_room" required disabled>
                  </div>

                </form>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary" onclick="reservar()">Reservar</button>
    </div>
  </div>
</div>

        <div class="col-md-6">
            <!-- Contenido del segundo cuadro -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cuadro 2</h5>
                    <p class="card-text">Contenido del segundo cuadro...</p>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- FOOTER -->
      <!-- Section Subscribe-->
      <!-- Page Footer-->
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container conteiner">
            <div class="row-40 justify-content-lg-between colum">
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">ENLACES RAPIDOS</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html">NOSOTROS</a></li>
                      <li><a href="our-tours.html">TURISMO</a></li>
                      <li><a href="our-team.html">SERVICIO</a></li>
                      <li><a href="grid-gallery.html">PROMOCION</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">SERVICIOS EN LINEA</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html"></a>😎</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">DIRECCION</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html"></a>C. Lopez de Zuñiga 547, Chancay 15131</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <h6 class="text-spacing-100 text-uppercase">Contacto</h6>
                <ul class="footer-contacts d-inline-block d-sm-block">
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 20 20">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                          </svg>
                        </span></div>
                      <div class="unit-body"><a class="link-phone" href="https://wa.me/966558046/?text=Hola, me da información sobre el hospedaje?">966558046</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 20 20">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                          </svg>
                        </span></div>
                      <div class="unit-body"><a class="link-aemail" href="mailto:#">CORREO</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 20 20">
                            <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z" />
                          </svg>
                        </span></div>
                      <div class="unit-body"><a class="link-location" href="#">DIRECCION</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li>
                      <a class="icon" href="https://www.facebook.com/profile.php?id=61552875982829">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="icon" href="https://twitter.com/LaPosadaHosp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="icon" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 24 24">
                          <path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a class="icon" href="https://www.instagram.com/hospedaje_laposada/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Hotel Posada</span>. All rights reserved<span>.</span>
                </p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="privacy-policy.html">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
  </div>



  <!-- MODAL DNI -->
  <div class="modal fade" id="modaldni" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modaldni">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CLIENTE DNI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="form-group">
      <label for="dni">DNI:</label>
      <input type="text" class="form-control" id="dniguest" name="dniguest" placeholder="Ingresa tu DNI" required>
      <br>
      <button type="button" class="btn btn-primary btn-sm" id="consultarDNI" name="consultarDNI"> CONSULTAR</button>

      </div>

    <div class="row">
    <div class="col">
      <input type="text" id="nameguest" name="nameguest" class="form-control" placeholder="Nombre" disabled required>
    </div>
    <div class="col">
      <input type="text" id="lastnameguest" name="nameguest" class="form-control" placeholder="Apellido" disabled required>
    </div>
  </div>
  <br>
  <div class="form-group">
  <input type="text" class="form-control" id="addressguest" placeholder="Direccion" required>
  </div>

      <div class="modal-footer">
        <!-- Add additional buttons if needed -->
        <button id="infoguestdni" class="btn btn-primary btn-sm">Enviar Datos</button>
      </div>
    </div>
  </div>
</div>
  </div>
</form>




<!--MODAL RUC-->
<div class="modal fade" id="modalruc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalruc">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CLIENTE RUC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="form-group">
      <label for="ruc">RUC:</label>
      <input type="text" class="form-control" id="rucGuest" name="rucGuest" placeholder="Ingresa tu RUC" required>
      <br>
      <button type="button" class="btn btn-primary btn-sm" id="searchRuc" name="searchRuc">CONSULTAR</button>
      </div>

  <br>
  <div class="form-group">
  <input type="text" class="form-control" id="addressRuc" placeholder="Direccion" disabled required>
  </div>
  <div class="form-group">
  <input type="text" class="form-control" id="businessName" placeholder="Razon Social" disabled required>
  </div>

      <div class="modal-footer">
        <!-- Add additional buttons if needed -->
        <button id="infoGuestRuc" class="btn btn-primary btn-sm">Enviar Datos</button>
      </div>
    </div>
  </div>
</div>
</form>







<!-- JS FUNCIONES PARA INGRESAR GUEST POR DNI O RUC Y OBTENER LOS NOMBRES O RAZON SOCIAL SEGUN QUE SE BUSQUE (DNI O RUC) -->
<script>
   //BUSCAR GUEST POR DNI
   $("#consultarDNI").click(function(){
    var dni=$("#dniguest").val();

$.ajax({
  type:"POST",
  url:"consultas/consultadni.php",
  data:'dni=' + dni,
  dataType: 'json',
  success: function(data){

    if (data == 1)
    {
      alert('El dni tiene que tener 8 digitos');
    }
    else{
      console.log(data);
      $("#nameguest").val(data.nombres);
      $("#lastnameguest").val(data.apellidoPaterno + " " + data.apellidoMaterno);
    }
  }

})

  })

  //ENVIAR DATOS A LA BD DE GUEST DNI

$("#infoguestdni").click(function() {
    var dni = $("#dniguest").val();
    var nombre = $("#nameguest").val();
    var apellido = $("#lastnameguest").val();
    var direccion = $("#addressguest").val();
    if (dni && nombre && apellido && direccion){
    // Enviar datos al servidor para la inserción en la base de datos
    $.ajax({
      type: "POST",
      url: "consultas/sendguestDNI.php",
      data: {
        dni: dni,
        nombre: nombre,
        apellido: apellido,
        direccion: direccion
        },
        success: function(response) {
          alert(response);
        }
      });
    }else{
      alert("Debes ingresar todos los datos antes de enviar")
    }
    });

// BUSCAR CON RUC

    $("#searchRuc").click(function(){
    var ruc=$("#rucGuest").val();

    $.ajax({
    type:"POST",
    url:"consultas/consultaruc.php",
    data:'ruc=' + ruc,
    dataType: 'json',
    success: function(data){

    if (data == 1)
    {
      alert('El Ruc tiene que tener 11 digitos');
    } 
    else{
      console.log(data);
      $("#addressRuc").val(data.direccion);
      $("#businessName").val(data.nombre);
    }
  }
  })
  })

  $("#infoGuestRuc").click(function() {
    var ruc = $("#rucGuest").val();
    var direccion = $("#addressRuc").val();
    var razonsocial = $("#businessName").val();
    if(ruc && direccion && razonsocial){

    // Enviar datos al servidor para la inserción en la base de datos
    $.ajax({
      type: "POST",
      url: "consultas/sendguestRUC.php",
      data: {
        ruc: ruc,
        direccion: direccion,
        razonsocial: razonsocial
        },
        success: function(response) {
          alert(response);
        }
      });
    }else{
      alert("Debes ingresar todos los datos antes de enviar")
    }
    });
    // traer nombres o company name
    function buscarDocumento() {
            // Obtener el número de documento del formulario
            var documentNumber = $("#document_number").val();

            // Realizar la solicitud AJAX
            $.ajax({
                type: "POST",
                url: "consultas/buscar_documento.php",
                data: { document_number: documentNumber },
                success: function (response) {
                    // Mostrar resultados en el campo de entrada
                    $("#resultadosName").val(response);
                },
                error: function (xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", error);
                }
            });
        }
</script>



<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
  <script src="js/reservation.js"></script>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>