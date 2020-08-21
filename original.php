<!-- base para crear el archivo makke pdf 
https://www.youtube.com/watch?v=MnIps8Yc8CY&t=163s
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5">
    <form action="makepdf.php" method="POST" class="offset-md-3 col-md-6">
      <h1>create pdf</h1>
      <p>fill out the details</p>
      <div class="row mb-2">
        <div class="col-md-6">
          <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <input type="text" name="lname" placeholder="Surname" class="form-control" required>
        </div>
      </div>

      <input type="email" name="email" placeholder="Email" class="form-control" required>

      <input type="tel" name="phone" placeholder="Phone" class="form-control" required>

      <textarea name="message" placeholder="your message"></textarea>

      <button type="submit" class="btn btn-succes btn-lg btn-block">Create PDF</button>
    </form>

  </div>

  <?php
  include("registro.php");
  ?>
</body>

</html>