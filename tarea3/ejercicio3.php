<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <title>Ejercicio 3</title>
  <style>
    body {
      background-image: url('https://source.unsplash.com/1600x900/?nature,water');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ejercicios</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ejercicio1.html">Ejercicio 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ejercicio5.php">Ejercicio 5</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <form class="card mt-5" method="post" action="">
      <p class="h1 card-header text-center text-light  bg-warning p-3 ">Ejercicio 3</p>
      <div class="card-body">
        <p class="mx-3 fw-bold">Realizar una aplicación que lea por teclado dos números, si el primero es mayor al
          segundo informar su suma y diferencia, en caso contrario informar el producto y la división del primero
          respecto al segundo. Deberá validar que el segundo número no sea cero.
        </p>
        <div class="form-group m-3">
          <label for="numero1" class="form-label">Primer número</label>
          <input type="number" class="form-control" id="numero1" name="numero1" required>
        </div>
        <div class="form-group m-3">
          <label for="numero2" class="form-label">Segundo número</label>
          <input type="number" class="form-control" id="numero2" name="numero2" required>
        </div>
        <button type="submit" class="btn btn-primary m-3">Calcular</button>
      </div>

      <div class="card text-bg-dark p-3 my-5">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $num1 = $_POST['numero1'];
          $num2 = $_POST['numero2'];


          if ($num2 == 0) {
            echo "<p class='text-danger'>El segundo número no puede ser cero</p>";
          } else {
            if ($num1 > $num2) {
              $suma = $num1 + $num2;
              $diferencia = $num1 - $num2;
              echo "<p>La suma de los dos números es: $suma</p>";
              echo "<p>La diferencia entre los dos números es: $diferencia</p>";
            } else {
              $producto = $num1 * $num2;
              $division = $num1 / $num2;
              echo "<p>El producto de los dos números es: $producto</p>";
              echo "<p>La división del primer número entre el segundo número es: $division</p>";
            }
          }
        }
        ?>
      </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>