<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <title>Ejercicio 5</title>
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
      <a class="navbar-brand" href="">Ejercicios</a>
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
  <div class="container">
    <form class="card mt-5" id="formulario" method="post" action="">
      <p class="h1 card-header text-center text-light bg-success p-3 ">Ejercicio 5</p>
      <div class="card-body">
        <p class="mx-3 fw-bold">Se cargan por teclado tres números distintos. Mostrar por pantalla el mayor de ellos.
        </p>
        <div class="mb-3 m-3">
          <label for="num1" class="form-label">Número 1</label>
          <input type="number" class="form-control" id="num1" name="num1" required>
        </div>
        <div class="mb-3 m-3">
          <label for="num2" class="form-label">Número 2</label>
          <input type="number" class="form-control" id="num2" name="num2" required>
        </div>
        <div class="mb-3 m-3">
          <label for="num3" class="form-label">Número 3</label>
          <input type="number" class="form-control" id="num3" name="num3" required>
        </div>
        <button type="submit" class="btn btn-primary m-3">Calcular</button>
      </div>
    </form>
    <div id="resultado" class="card text-bg-dark p-3 my-5 d-none">
      <h2 class="text-center mb-3">El mayor número es:</h2>
      <p class="h2 lead text-center " id="mayor">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
          echo '<script>document.getElementById("resultado").classList.remove("d-none");</script>';
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $num3 = $_POST['num3'];

          if ($num1 == $num2 && $num3 == $num2) {
            $mayor = $num1;
            echo "Numeros iguales.Por lo tanto el mayor número es " . $mayor;
          } elseif ($num1 >= $num2 && $num1 >= $num3) {
            $mayor = $num1;
            echo $mayor;
          } elseif ($num2 >= $num1 && $num2 >= $num3) {
            $mayor = $num2;
            echo $mayor;
          } elseif ($num3 >= $num1 && $num3 >= $num2) {
            $mayor = $num3;
            echo $mayor;
          }
        }
        ?>
      </p>
    </div>
  </div>
</body>

</html>