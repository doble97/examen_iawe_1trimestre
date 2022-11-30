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
      /* text-align: center; */
    }


    .fgdimensiones {
      text-align: unset;
      /*display: inline-block; */
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


  <!-- bg-dark-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">AsirPack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="login.html">Login
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
        </ul>
      </div>
      <form>
        <button type="submit" class="btn btn-light">Clasico</button>
        <button type="submit" class="btn btn-dark">Oscuro</button>
      </form>
    </div>
  </nav>


  <div id="container">
    <form>
      <center>
        <h2>Login</h2>
      </center>
      <div class="form-group">
        <label for="inputUsuario" class="form-label mt-4">Email address</label>
        <input type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
      </div>
      <div class="form-group">
        <label for="inputPassword" class="form-label mt-4">Email address</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Constraseña">
      </div>
      <br><br>
      <center><button type="submit" class="btn btn-primary">Login</button></center>

    </form>
  </div>
  </div>

</body>

</html>