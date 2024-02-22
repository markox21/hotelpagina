//FECHA RESTRICCION
document.addEventListener("DOMContentLoaded", function () {
    const fechaEntrada = document.getElementById("checkin_date");
    const fechaSalida = document.getElementById("checkout_date");

    // Obtén la fecha actual en formato yyyy-mm-dd
    const today = new Date().toISOString().split("T")[0];

    // Establece la fecha mínima para la entrada como hoy
    fechaEntrada.setAttribute("min", today);

    // Establece la fecha mínima para la salida como la fecha de entrada
    fechaSalida.setAttribute("min", today);

    // Asegúrate de que la fecha de salida no sea antes que la fecha de entrada
    fechaEntrada.addEventListener("input", function () {
        fechaSalida.setAttribute("min", fechaEntrada.value);
    });
});


//PAYMENT RESERVATION PRICE
// function paymentReservation(dateIn, dateOut, prices) {
//     let fechaInicio = new Date(dateIn);
//     let fechaFin = new Date(dateOut);
//     let milisegundosInicio = fechaInicio.getTime();
//     let milisegundosFin = fechaFin.getTime();
  
//     let minutes = (milisegundosFin - milisegundosInicio) / (1000 * 60);
  
//     if (minutes <= 240) {
//       $("input[name=payment_room]").val(prices[0]);
//     } else if (minutes > 240 && minutes <= 720) {
//       $("input[name=payment_room]").val(prices[1]);
//     } else {
//       let dias = Math.floor(minutes / 1440);
//       let minutesRes = minutes % 1440;
//       let payment = parseInt(prices[2]) * dias;
//       let paymentMinutes = 0;
  
//       // --
//       if (minutesRes > 0 && minutesRes <= 240) {
//         paymentMinutes = parseInt(prices[0]);
//       } else if (minutesRes > 240 && minutesRes <= 720) {
//         paymentMinutes = parseInt(prices[1]);
//       } else {
//         paymentMinutes = parseInt(prices[2]);
//       }
//       payment += paymentMinutes;
  
//       return $("input[name=payment_room]").val(payment);
//     }
//   }
