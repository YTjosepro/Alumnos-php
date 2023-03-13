<!doctype html>
<html lang="es">
<head>
  <title>Lista de alumnos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>    
        <div class="container-fluid bg-warning">
            <div class="row">
                <div class="col-12">
                    <header class="d-flex">
                        <div class="col-6">
                            <h1>Bienvenido: <?php echo $_SESSION['nombre']; ?> </a></h1> 
                        </div>
                        <div class="col-6">
                            <h3 class=text-end><a href="cerrar.php">Cerrar sesión</a></h3>
                            <h3 style="text-align:left;">Lista de Alumnos</h3>
                        </div>
                    </header>
                </div>
            </div> 
        </div>