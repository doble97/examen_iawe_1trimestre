<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
  <style>
    body {
      background-color: #bbd9ef;
    }

    #navbar {
      background-color: #0f4770;
      width: auto;
      height: fit-content;
      margin-top: 0px;
      color: white;
      min-height: 80px;
    }

    #container {
      background-color: #0f4770;

      color: white;
      width: 50em;
      margin-top: 50px;
      margin-right: auto;
      margin-left: auto;
      padding: 20px;
      /* text-align: center; */
      border-radius: 15px;
    }


    .fgdimensiones {
      text-align: unset;
      display: inline-block;
    }

    #dimen_cm {
      text-align: center;
      margin-right: 0px;
      width: 30px;
    }

    input[type=submit] {
      margin-top: 20px;
    }

    #dimen_largo,
    #dimen_ancho,
    #dimen_profundo,
    #dimen_cm {
      display: inline-block;
      float: left;

    }

    #dimen_largo,
    #dimen_ancho,
    #dimen_profundo {
      width: 8em;
    }
  </style>

</head>

<body>
  <?php
  $tema_navbar = "navbar navbar-expand-lg navbar-dark bg-primary";
  if (isset($_SESSION["tema_navbar"])) {
    $tema_navbar = $_SESSION["tema_navbar"];
  }
  if (isset($_GET["clasico"])) {
    $tema_navbar = "navbar navbar-expand-lg navbar-dark bg-primary";
  } elseif (isset($_GET["oscuro"])) {
    $tema_navbar = "navbar navbar-expand-lg navbar-dark bg-dark";
  }
  $_SESSION["tema_navbar"] = $tema_navbar;
  echo "<nav class='$tema_navbar'>";
  ?>

  <!-- bg-dark-->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> -->
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">AsirPack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
        </ul>
      </div>


      <form action="presupuesto.php" method="GET">
        <button type="submit" class="btn btn-light" name="clasico" <?php
          if ($tema_navbar == "navbar navbar-expand-lg navbar-dark bg-primary") {
            echo "hidden";
          }
          ?>
        >Clasico</button>
        <button type="submit" class="btn btn-dark" name="oscuro" <?php
          if ($tema_navbar == "navbar navbar-expand-lg navbar-dark bg-dark") {
            echo "hidden";
          }
          ?>
      >Oscuro</button>
      </form>
    </div>
  </nav>


  <div id="container">
    <form>
      <div class="form-group">
        <center>
          <h2>Presupuesto</h2>
        </center>

        <span>Dadas las dimensiones el paquete es de tamaño:__________</span>
        <br>
        <span>Considerado en la categoria de peso : _________</span>
        <br>
        <div class="form-group">
          <label for="inputPresupuesto" class="form-label mt-4">Presupuesto:</label>
          <input type="text" id="inputPresupuesto" name="inputPresupuesto" placeholder="Presupuesto"> €
        </div>
        <br>
        <center>
          <h5> Seleccione fecha de entrega:</h5>
        </center>
        <!-- radio buttons-->

        <?php

        $ej_fechas = array("29/11/2022", "30/11/2022", "1/12/2022");


        for ($i = 0; $i < count($ej_fechas); ++$i) {
          print('
            <div class="form-check">
              <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="' . $ej_fechas[$i] . '." checked="">
              <label class="form-check-label" for="optionsRadios1">
              ' . $ej_fechas[$i] . '
              </label>
            </div>');
        }



        ?>




        <br>
        <br>
        <center>
          <h5> Rellene datos de usuario:</h5>
        </center>
        <div class="form-group">
          <label for="inputNombre" class="form-label mt-4">Nombre:</label>
          <input type="text" id="inputNombre" name="inputNombre" placeholder="nombre">
        </div>
        <div class="form-group">
          <label for="inputApellido" class="form-label mt-4">Apellidos:</label>
          <input type="text" id="inputApellido" name="inputApellido" placeholder="Apellido">
        </div>
        <div class="form-group">
          <label for="inputDireccion" class="form-label mt-4">Direccion:</label>
          <input type="text" id="inputDireccion" name="inputDireccion" placeholder="direccion">
        </div>


        <center><button type="submit" class="btn btn-primary">Realizar compra</button></center>



    </form>


  </div>


</body>

</html>