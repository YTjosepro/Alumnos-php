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
        <div class="container-fluid bg-info">   
            <div class="row">
                <div class="col-10">
                    <header class="d-flex">
                        <div style="margin-right:320px" class="col-3">
                            <h1>Bienvenido: <?php echo $_SESSION['nombre']; ?> </a></h1> 
                        </div>
                        <div style="margin-left:132px" class="col-8">
                            <h4   style="margin-right:0px" class=text-end><a href="cerrar.php" class="text-danger">Cerrar sesión</a></h4>
                            <h3 style="text-align:start;">Lista de Alumnos</h3>
                        </div>
                    </header>
                </div>                
            </div> 
        </div>