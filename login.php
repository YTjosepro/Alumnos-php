<?php
    session_start();
    if (isset($_SESSION['nombre'])) {
        header('Location: index.php');
    }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body background="template/imagen2.png">
    <center>  
      <h3 style="margin-bottom:10px;">Iniciar sisión</h3>
        <form method="POST" action="loginProceso.php">        
          <table>
            <tr>
              <input type="text" name="txtUsu" placeholder="Usuario" style="margin-bottom: 3px;">
            </tr>
            <br>                
            <tr>
               <input type="password" name="txtPass" placeholder="Password">
            </tr>            
          </table>
          <br>
          <button type="submit" class="btn btn-info">Iniciar sesión</button>
        </form>


    </center>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>           
        </form>
    </center>
</body>
</html>