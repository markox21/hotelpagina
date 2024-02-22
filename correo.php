<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="distribution" content="global" />
  <meta name="author" content="Hostal La Posada">
  <meta name="contact" content="Central: 996 558 046" />
  <meta name="keywords" content="Hotel en Chancay, Alojamiento en Chancay, Habitaciones de Hotel, Servicios de Hotel, Reservas en Chancay, Hospedaje de Calidad, Estancia Confortable, Turismo en Chancay, Viaje a Chancay, Descanso y Relax, Hotel con Vistas al Mar, Turismo Chancay" />
<meta name="description" content="Bienvenido al Hotel en Chancay, donde ofrecemos alojamiento de calidad, servicios excepcionales y una estancia confortable. Disfruta de nuestras habitaciones con vistas al mar, realiza reservas para tu viaje a Chancay y experimenta el mejor turismo en la zona. ¡Te esperamos para brindarte un descanso inolvidable!" />
  <style>
    /* Estilo para el modal */

  </style>
</head>
<body>

<a href="#" id="openModal">Abrir Modal</a>

<!-- Modal -->
<div id="myModal">
  <div id="modalContent">
    <span id="closeBtn">&times;</span>
    <h2>Ingrese el texto para enviar por correo electrónico</h2>
    <form id="emailForm">
      <label for="emailText">Texto:</label>
      <textarea id="emailText" name="emailText" rows="4" cols="50"></textarea>
      <br>
      <input type="submit" value="Enviar Correo Electrónico">
    </form>
  </div>
</div>

<script>
  // Función para abrir el modal
  document.getElementById('openModal').onclick = function() {
    document.getElementById('myModal').style.display = 'block';
  };

  // Función para cerrar el modal
  document.getElementById('closeBtn').onclick = function() {
    document.getElementById('myModal').style.display = 'none';
  };

  // Función para enviar el formulario por correo electrónico (simulado)
  document.getElementById('emailForm').onsubmit = function(event) {
    event.preventDefault();
    

    // Cerramos el modal después de enviar el formulario
    document.getElementById('myModal').style.display = 'none';
  };
</script>

</body>
</html>
