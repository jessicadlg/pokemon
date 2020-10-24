<?php
$login=true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 5-Pokedex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
    <a href="index.php">
        <img src="recursos/imagenes/Pokebola.png" alt="logo" style="width: 50px">
    </a>
         <h1 class="text-center mr-sm-2">Pokedex</h1>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
        <?php
        if(!$login)
        echo'
         <form action="" method="post" class="ml-auto form-inline my-2 my-lg-0">
                    <input class="form-control m-1  "  type="text" name="mail" placeholder="Email" aria-label="Search">
                    <input class="form-control m-1" type="password" name="pass" placeholder="Password" aria-label="Search">
                    <button class="btn btn-outline-info m-1"  type="submit">Ingresar</button>
         </form>
        ';
        else echo '<button class="btn btn-outline-info ml-auto"  type="submit">Cerrar sesión</button>';
        ?>
    </div>
    </nav>

</header>




