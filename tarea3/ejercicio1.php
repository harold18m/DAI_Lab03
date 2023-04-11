<?php 
$username = $_POST["Username"];
$email = $_POST["Email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
<div class="row">
    <div class="col-3">
    <button type="button" class="btn btn-success p-3 m-3"><a class="link-light" href="ejercicio1.html">< Atras</a></button>
    </div>
    <div class="col-6">
    <div id="datos" class=" card text-bg-dark p-3 m-3  " style="">
        <?php echo "<p> Username: <b>$username</b></p>";
            echo "<p> Email: <b>$email</b> </p>"; 
        ?>
    </div>
</div>
</div>
</body>
</html>