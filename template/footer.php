    <center >
        <br>
        <table>
            <div class="col-2" style="color:bisque">
                <tr>
                    <td><h6>Código</h6></td>
                    <td><h6>Apellido paterno</h6></td>
                    <td><h6>Apellido materno</h6></td>
                    <td><h6>Nombre</h6></td>
                    <td><h6>Parcial</h6></td>
                    <td><h6>Final</h6></td>
                    <td><h6>Promedio</h6></td>
                    <td><h6>Ediatar</h6></td>
                    <td><h6>Eliminar</h6></td>
                </tr>
            </div>
            <?php
            foreach ($estudiantes as $dato) {
                ?>
            
                <body background="template/study.png">          
                    <tr>
                        <td>
                            <?php echo $dato-> id_alumno; ?>
                        </td>
                        <td>
                            <?php echo $dato-> ap_paterno; ?>
                        </td>
                        <td>
                            <?php echo $dato-> ap_materno; ?>
                        </td>
                        <td>
                            <?php echo $dato-> nombres; ?>
                        </td>
                        <td>
                            <?php echo $dato-> ex_parcial; ?>
                        </td>
                        <td>
                            <?php echo $dato-> ex_final; ?>
                        </td>
                        <td>
                            <?php echo ($dato->ex_final + $dato->ex_parcial) / 2; ?>
                        </td>
                        <td><a href="editar.php?id=<?php echo $dato->id_alumno; ?> " class="text-success">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>" class="text-danger">Eliminar</a></td>                        
                    </tr>
                </body>            
             <?php
              }
              ?>
        </table>
    </center>