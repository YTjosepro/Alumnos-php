<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
        header('Location: login.php');
    }elseif(isset($_SESSION['nombre'])) {
        include 'back/conexion.php';
        $sentencia = $bd->query("SELECT * FROM estudiantes;");
        $estudiantes = $sentencia->fetchAll(PDO::FETCH_OBJ);
        //print_r($estudiantes);
    }else {
        echo "Error en el sistema";
    }

    include 'template/header.php';
    include 'template/footer.php'  
?>    
        <!-- inicio insert -->
        <center>
    <body>
        <hr>
        <h3>Ingresar alumnos:</h3>
        <form method="POST" action="insertar.php">
            <table>
                <tr>
                    <td>Apellido parerno: </td>
                    <td><input type="text" name="txtPaterno"></td>
                </tr>
                <tr>
                    <td>Apellido materno: </td>
                    <td><input type="text" name="txtMaterno"></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Nota parcial: </td>
                    <td><input type="text" name="txtParcial"></td>
                </tr>
                <tr>
                    <td>Nota final: </td>
                    <td><input type="text" name="txtFinal"></td>
                </tr>
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset" name=""></td>
                    <td><input type="submit" value="INGRESAR ALUMNO" id=""></td>
                </tr>
            </table>
    </body>
            <!-- fin insert-->
    </center>
</body>
</html>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>