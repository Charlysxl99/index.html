<!-- <?php
      $promotor = trim($_POST['promotor']);
      $nombre = trim($_POST['nombre-ejecutivo']);
      $oficina = trim($_POST['oficina']);
      $tipo = trim($_POST['tipo']);

      ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Union de credito</title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

</head>

<body>
  <form action="dompdf.php" method="POST">

    <div class="conteiner">
      <!-- contenedor todo -->

      <div class="item header">
        <nav>
          <ol>
            <div class="logo-conteiner">
              <img src="img\logo_udc_saltillo.png" alt="" data-no-retina="">

            </div>
            <li>Cotizador Master PROCAAR </li>
            <div class="form_conteiner">

              <div class="wrapper"><label for="text">Promotor:</label><input type="text" id="text" name="promotor">
              </div>

              <!-- <form class="example"> -->
                <div class="wrapper"><label for="text">Nombre del Ejecutivo Scotiabank</label><input type="text" id="text" name="nombre-ejecutivo">
                </div>
              <!-- </form> -->
            </div>

            <div class="form_conteiner">
              <!-- <form class="example"> -->
                <div class="wrapper"><label for="text">Oficina:</label><input type="text" id="text" name="oficina">
                </div>
              <!-- </form> -->
              <!-- <form class="example"> -->
                <div class="wrapper"><label for="text">Tipo:</label><input type="text" id="text" name="tipo">
                </div>
              <!-- </form> -->
            </div>

          </ol>
        </nav>
      </div>
      <!--     finaliza header -->
      <div class="item contenido">
        <div class="spacio">
          <p>introducir datos generales</p>
        </div>
        <div class="conteiner_datos-uno">
          <div class="item_datos precio-v">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Precio vehiculo:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos equipo-a">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">equipo alidado:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos renta-e">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Renta extaordinaria</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos deposito-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Deposito de Garantia</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos total">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">total</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos acceso-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Acceso Y otros gastos</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos garantia-ex">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Garantia extraordinaria</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos asegurada-x">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Aseguradora por parte de:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos otros-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Otros Gastos ABC Leasing</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos descuento-p">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Descuento para ABC (IVA)</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tarifa-a">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Tarifa aplicable de IVA equipo:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tasa-iva">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Tasa IVA rentas:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
        </div>
        <div class="spacio">
          <p>Introducir datos para el calculo (valores iva incluido,excepto Anticipo)</p>
        </div>

        <div class="conteiner_datos-dos">

          <div class="item_datos precio-v">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Precio vehiculo:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos renta-e">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Renta extaordinaria</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos deposito-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Deposito de Garantia</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos total">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">total</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos acceso-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Acceso Y otros gastos</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos garantia-ex">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Garantia extraordinaria</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos asegurada-x">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Aseguradora por parte de:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos otros-g">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Otros Gastos ABC Leasing</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos descuento-p">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Descuento para ABC (IVA)</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tarifa-a">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Tarifa aplicable de IVA equipo:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tasa-iva">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Tasa IVA rentas:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tiie">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">TIIE</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos plazo-de">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Plazo de proveedor</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos meses-de">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Mes de facturacion de la unidad</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos tipo-vehiculo">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Tipo de vehiculo</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos renta-pro">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Renta proporcional</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos uso-anti">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Uso de anticipo</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos seguro-f ">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Seguro Financiero</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos EBO">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">EBO Plazo 12</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos Unidades-R">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Unidades Requeridas</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos Plazo-S">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Plazo solicicitado</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos s-gps">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Servicio GPS:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos costo-gps">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Costo GPS con IVA</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos Domiciliacion-a">
            <!-- <form class="enviar"> -->
              <div class="wrapper"><label for="text">Domiciliacion automatica:</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
        </div>

        <div class="spacio">
          <p>Introducir datos para el seguro y tipo de cambio</p>
        </div>
        <div class="conteiner_datos-tres">
          <div class="item_datos precio-v">
            <!-- <form class="example"> -->
              <div class="wrapper"><label for="text">Valor del seguro pago de contado (primer año) IVA incluido</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>
          <div class="item_datos equipo-a">
            <!-- <form class="example"> -->
              <div class="wrapper"><label for="text">Nombre Aseguradora</label><input type="text" id="text">
              </div>
            <!-- </form> -->
          </div>

        </div>

        <div class="spacio">
          <p>imprimir</p>
        </div>

        <div class="conteiner_datos-tres boton">

          <button type="submit" class="btn btn-succes btn-lg btn-block create-pdf item_datos " name="enviar">Crear PDF</button>
        </div>

      </div>
      <!-- contenedor todo -->
    </div>
    <!-- comienza footer-->
    <div class="spacio">
      <p>Footer</p>
    </div>
    <div class="item footer">
      soy el footer
    </div>
    <!--     termina footer -->
    <!-- contenedor todo -->
    </div>
    <!-- contenedor todo -->
  </form>
  <?php
  include("registro.php");
  ?>
</body>

</html>