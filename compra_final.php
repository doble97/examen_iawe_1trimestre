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
        <center>
            <h2> Compra finalizada</h2>
        </center>
        <span> Nombre: </span><br>
        <span> Apellidos: </span><br>
        <span> Direcciones: </span><br>
        <span> Datos del paquete: </span><br>
        <span> Ancho: </span>_______<span> Alto: </span>_______<span> Profundidad: </span>_______<br>
        <span> Peso: </span><br>
        <span> Fecha de entrega: </span><br>

    </div>


</body>

</html>