<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <title>Ejercicio 2</title>
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
        <form class="card" id="formulario" method="post" action="">
          <p class="h1 card-header text-center text-light  bg-primary p-3 ">Ejercicio 2</p>
        <div class="card-body">  
            <p class="mx-3 fw-bold">En una página se ingresan cuatro números, calcular y mostrar la suma de los dos primeros y el producto del tercero y el cuarto</p>    
        <div class="mb-3 m-3">
            <label for="num1" class="form-label" >Primer número</label>
            <input type="number" class="form-control" id="num1" name="num1" required>
        </div>
        <div class="mb-3 m-3">
            <label for="num2" class="form-label">Segundo número</label>
            <input type="number" class="form-control" id="num2" name="num2" required>
        </div>
        <div class="mb-3 m-3">
            <label for="num3" class="form-label">Tercer número</label>
            <input type="number" class="form-control" id="num3" name="num3" required>
        </div>
        <div class="mb-3 m-3">
            <label for="num4" class="form-label">Cuarto número</label>
            <input type="number" class="form-control" id="num4" name="num4" required>
        </div>
        <button type="submit" class="btn btn-primary m-3" ">Calcular</button>
        </div>
        </form>
        <div class="card text-bg-dark p-3 my-5">
            <p class="fw-bold">Resultados:</p>
          <?php  
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $num1 = $_POST['num1'];
                  $num2 = $_POST['num2'];
                  $num3 = $_POST['num3'];
                  $num4 = $_POST['num4'];
            
                  $suma = intval($num1) + intval($num2);
                  $producto = intval($num3) * intval($num4);
   
                  echo "<p>La suma de los dos primeros números es: $suma </p>";
                  echo "<p>El producto del tercer y cuarto número es: $producto </p>";
                              }                
            ?>
        </div>
    </div>

      
      
    </body>
    </html>