<?php

  include 'Conexion.php';
  ?>

            <table class="table table-hover table-dark table-responsive-sm table-responsive-md">
              <caption>
                <button class="btn btn-success" data-toggle="modal"
                 data-target="#modalNuevo">Agregar Nuevo
                  <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <a href="http://localhost/CRUD/"><button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> 
                Salir</button></a>
              </caption>
                <Thead>
                    <tr>
                    <th><b>Nombre </b> </th>
                    <th><b>Apellidos </b> </th>
                    <th><b>Correo </b>  </th>
                    <th><b>Teléfono </b> </th>
                    <th><b>Contraseña </b> </th>
                    <th><b>Editar</b></th>
                    <th><b>Eliminar</b></th>
            
                    </tr>
                </Thead>
                <tbody id="myTable">
                    <?php

                    include 'Conexion.php';

                        $consulta = "SELECT * FROM usuarios";
                        $resultado = mysqli_query($Conexion, $consulta);
                        
                            while($row = mysqli_fetch_array($resultado)){
                              //Cerramos la cadena datos para enviarla al formulario de edicion de datos y esta se llene automaticamente
                                  $datos = $row [0]."||".$row [1]."||".$row [2]."||".$row [3]."||".$row [4]."||".$row[5];
                                //cerramos php porque sigue el llenado con etiquetas html
                                ?>                
                            <tr>            
                              
                                <td><?php echo $row[1]//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row[2]//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row[3]//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row[4]//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row[5]//llenamos con el dato de la tabla ?></td>
                                <td><button class="btn btn-light" data-toggle="modal"
                                data-target="#modalEditar" onclick="agregarFormulario('<?php echo $datos ?>')"> <i class="fas fa-edit" aria-hidden="true"></i></button></td><!--Se manda la cadena datos al controlador-->
                                <td><button class="btn btn-danger" onclick="confirmarEliminar('<?php echo $row[0] ?>')"><i class="fa fa-trash"
                                aria-hidden="true"></i></button></td> <!-- Mandamos el ID $row[0]-->
                            </tr>
                    <?php
                    }//cerramos el while aqui para que no se llene la tabla
                    ?>
        </div>
        </tbody>
            </table>     
            <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
     </body>
</html>