<?php

include("con_db.php");

if ($conex) {
  echo "todo correcto";
}
if (isset($_POST['enviar'])){
if (strlen($_POST['promotor']) >= 1 && 
    strlen($_POST['nombre-ejecutivo']) >= 1 &&
    strlen($_POST['oficina'])>= 1 &&
    strlen($_POST['tipo'])>= 1
    )
{
    
  $promotor = trim($_POST['promotor']); 
  $nombre = trim($_POST['nombre-ejecutivo']);
  $oficina = trim($_POST['oficina']);
  $tipo = trim($_POST['tipo']);
  $fecha = date("d/m/y");


  $consult = "INSERT INTO uniont( promotor, nombre-ejecutivo, oficina, tipo, fecha) ;
  VALUES 
  (
  ['$promotor'],
  ['$nombre'],
  ['$oficina'],
  ['$tipo'],
  )";

$resultado = mysqli_query($conex,$consult);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
  }

?>