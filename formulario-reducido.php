<!-- <?php
      $promotor = trim($_POST['promotor']);
      $nombre = trim($_POST['nombre-ejecutivo']);
      $oficina = trim($_POST['oficina']);
      $tipo = trim($_POST['tipo']);

      ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>

</head>

<body>

  <form action="makepdf.php" method="POST">

    <div class="conteiner">
      <!-- contenedor todo -->

      <div class="item header">
        <nav>
          <ol>
            <div class="logo-conteiner">
              <img src="https://udcs.mx/wp-content/uploads/2020/01/logo-union.png" alt="" data-no-retina="">

            </div>
            <li>Cotizador Master PROCAAR </li>
            <div class="form_conteiner">

              <div class="wrapper"><label for="text">Promotor:</label><input type="text" id="text" name="promotor">
              </div>

              
                <div class="wrapper"><label for="text">Nombre del Ejecutivo Scotiabank</label><input type="text" id="text" name="nombre-ejecutivo">
                </div>
              
            </div>

            <div class="form_conteiner">
              
                <div class="wrapper"><label for="text">Oficina:</label><input type="text" id="text" name="oficina">
                </div>
              
              
                <div class="wrapper"><label for="text">Tipo:</label><input type="text" id="text" name="tipo">
                </div>
              
            </div>

          </ol>
        </nav>
      </div>
      <!--     finaliza header -->
      <div class="item contenido">
        <div class="spacio">
          <p>introducir datos generales</p>
        </div>
</body>

</html>