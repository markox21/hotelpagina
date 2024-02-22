
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
  
  function enviarDatos() {
    // Obtén el valor del cuadro de texto
    var mensaje = document.getElementById('mensaje').value;
    
    alert('Mensaje enviado: ' + mensaje);
    }
