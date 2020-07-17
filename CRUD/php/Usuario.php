<?php

//conexion a la BD
include 'Conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>ITI-UTNAY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--SweetAlert-->

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!--BootStrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
   integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
   integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
   <!--FontAwesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
   integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   
</head>
<body>
<div class="container">
    <div><h2 class="text-center">Bienvenido Usuario</h2></div>
    <table class="table table-hover table-dark table-responsive-sm table-responsive-md">
</div>

              
                <Thead>
                    <tr>
                    <th><b>Nombre </b> </th>
                    <th><b>Apellidos </b> </th>
                    <th><b>Correo </b>  </th>
                    <th><b>Teléfono </b> </th>
                   
            
                    </tr>
                </Thead>
                <tbody id="myTable">
                    <?php

                    include 'Conexion.php';

                        $consulta = "SELECT nombre, apellido, correo, tel FROM usuarios WHERE pw ='Ballesteros@543'";
                        $resultado = mysqli_query($Conexion, $consulta);
                        
                            while($row = mysqli_fetch_array($resultado)){
                                
                                ?>                
                            <tr>            
                                <td><?php echo $row['nombre']//llenamos con el dato de la tabla ?> </td>
                                <td><?php echo $row['apellido']//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row['correo']//llenamos con el dato de la tabla ?></td>
                                <td><?php echo $row['tel']//llenamos con el dato de la tabla ?></td>
                                
                    <?php
                    }//cerramos el while aqui para que no se llene la tabla
                    ?>
        </div>
        </tbody>
            </table>     
            <a href="http://localhost/CRUD/"><button type="submit" name="login" class="btn btn-outline-primary"><i class="fa fa-sign-out-alt" aria-hidden="true"></i>
            
            Cerrar Sesión</button></a>
     </body>
</html>

