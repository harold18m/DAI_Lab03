<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <title>Ejercicio 4</title>
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
      <div class="container">
        <form class="card mt-5" id="formulario" method="post" action="" >
            <p class="h1 card-header text-center text-light  bg-info p-3 ">Ejercicio 4</p>
          <div class="card-body"> 
            <p class="mx-3 fw-bold">Se ingresan tres notas de un alumno, si el promedio es mayor o igual a 13 mostrar el mensaje 'aprobado', sino 'reprobado'.</p>
                <div class="mb-3 m-3">
                    <label for="nota1" class="form-label">Nota 1:</label>
                    <input type="number" min=0 max=20 class="form-control" id="nota1" name="nota1" required>
                  </div>
                  <div class="mb-3 m-3">
                    <label for="nota2" class="form-label">Nota 2:</label>
                    <input type="number"  min=0 max=20 class="form-control" id="nota2" name="nota2" required>
                  </div>
                  <div class="mb-3 m-3">
                    <label for="nota3" class="form-label">Nota 3:</label>
                    <input type="number" min=0 max=20 class="form-control" id="nota3" name="nota3" required>
                  </div>
                  <button type="submit" class="btn btn-primary m-3" name="calcular">Calcular</button>
                <div id="resultado" class="mt-4">
                <?php
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];

                    $promedio = ($nota1 + $nota2 + $nota3) / 3;

                    if ($promedio >= 13) {
                        echo '<p class="alert alert-success">Regular</p>';
                    } else {
                        echo'<p class="alert alert-danger">Reprobado</p>';
                    };
                    
                    ?>
                </div>
            </div>
        </form>
      </div> 
</body>
</html>