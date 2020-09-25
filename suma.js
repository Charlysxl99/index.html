

document.getElementById("primero").addEventListener("keyup", sumar);
document.getElementById("segundo").addEventListener("keyup", sumar);
document.getElementById("mes").addEventListener("onchange", sumar);

function sumar() {
  var primero = document.getElementById("primero").value;
  var segundo = document.getElementById("segundo").value;
  var mes = document.getElementById("mes").value;
  var suma = (parseInt(primero) + parseInt(segundo)) / parseInt(mes);
  document.getElementById("resultado").value = parseInt(suma);
}

/* var botoncito = document.getElementById("guardar"); */
/* botoncito.addEventListener("click" ,sumar); */

/* document.querySelector(botoncito).addEventListener('click', function (event) {
  event.preventDefault();
});  */

/* var vehiculo = document.getElementById("text-vehiculo");
var equipo = document.getElementById("text-equipo");
var total = document.getElementById("text-total1");
var precio = parseInt(vehiculo.value);
var aliado = parseInt(equipo.value);
var total.value = vehiculo+equipo;
var botoncito = document.getElementById("boton");
botoncito.addEventListener("click", despertar);


function despertar() {
 
  alert("hola mundo");

} */