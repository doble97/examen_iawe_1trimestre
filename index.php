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
      min-width: 30em;
      max-width: 60em;
      height: 25em;
      margin-top: 50px;
      margin-right: auto;
      margin-left: auto;
      padding: 20px;
    }


    .fgdimensiones {
      text-align: unset;
    }

    #dimen_cm {
      text-align: center;
      margin-right: 0px;
      width: 30px;
    }

    input[type=submit] {
      margin-top: 20px;
    }

    .fgdimensiones {
      margin-top: 10px;
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
      <form action="index.php" method="GET">
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
        <label for="exampleSelect1" class="form-label mt-4">Seleccione tiempo de envío:</label>
        <select class="form-select" id="exampleSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="row fgdimensiones">


        <div class="col-sm-4">
          <div class=" input-group">
            <input type="text" type="text" lass="form-control" id="dimen_profundo" name="dimen_profundo" placeholder="ancho">
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class=" input-group">
            <input type="text" type="text" id="dimen_profundo" name="dimen_profundo" placeholder="alto">
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class=" input-group">
            <input type="text" type="text" id="dimen_profundo" name="dimen_profundo" placeholder="profundidad">
            <div class="input-group-append">
              <span class="input-group-text">cm</span>
            </div>
          </div>
        </div>

      </div>
      <div class="form-group">
        <label for="inputPeso" class="form-label mt-4">Peso: </label>
        <input type="number" class="form-control" id="inputPeso" aria-describedby="Peso" placeholder="Peso en kilogramaos">
      </div>
      <br>
      <br>
      <center><button type="submit" class="btn btn-primary">Calcular presupuesto</button></center>

    </form>
  </div>

  </div>

</body>

</html>