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
    <div><h2 class="text-center mb-3">Bienvenido Admin</h2></div>
    <div><h2 class="text-center mb-3">Control de Usuarios</h2></div>
    <div id="tabla"></div>
</div>

<!-- The modal -->
<div class="modal fade" id="modalNuevo">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header pl-0">
                <h4 class="modal-title w-100 text-center position-absolute">Agregar usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

 <!-- Modal body -->
 <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" name="Nombre" placeholder="Nombre" id="Nombre">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" id="Apellidos">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Correo" id="Correo">
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name="Tel" placeholder="Telefono" id="Tel">
        </div>
        <div class="form-group col">
          <input type="password" class="form-control" name="pwd" placeholder="Contraseña" id="pwd">
        </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
   
    <button type="button" class="btn btn-outline-success" id="registrarAdmin"
    data-dismiss="modal">Agregar</button>
</div>
</div>
</div>
</div>

<!-- The modal -->
<div class="modal fade" id="modalEditar">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header pl-0">
                <h4 class="modal-title w-100 text-center position-absolute">Editar usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

 <!-- Modal body -->
 <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" hidden="" name="IdE" placeholder="Id" id="IdE">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="NombreE" placeholder="Nombre" id="NombreE">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="ApellidosE" placeholder="Apellidos" id="ApellidosE">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="CorreoE" placeholder="Correo" id="CorreoE">
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name="TelE" placeholder="Telefono" id="TelE">
        </div>
        <div class="form-group col">
          <input type="password" class="form-control" name="pwdE" placeholder="Contraseña" id="pwdE">
        </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-outline-primary" id="EditarAdmin"
    data-dismiss="modal">Aceptar</button>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../Js/Controlador.js"></script>

    

    <script>
        $(document).ready(function(){
            $('#tabla').load('Tabla.php'); /*manda a llamar la tabla del archivo tabla.php
            tambien mandamos llamar la funcion de actualizar los datos de la tabla*/
        });
        
        
    </script>
</body>

</html>

