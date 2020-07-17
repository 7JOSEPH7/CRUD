<?php

    include 'Conexion.php'; //conexion a la BD

    //pasamos los datos desde el controlador a variables PHP
    //usamos el metodo mysqli_real_escape_string para inyectar sql a la BD
    $Id = mysqli_real_escape_string($Conexion,$_POST['id']);
    $Nombre = mysqli_real_escape_string($Conexion,$_POST['nombre']);
    $Apellido = mysqli_real_escape_string($Conexion,$_POST['apellido']);
    $Correo = mysqli_real_escape_string($Conexion,$_POST['correo']);
    $Tel = mysqli_real_escape_string($Conexion,$_POST['tel']);
    $Pw = mysqli_real_escape_string($Conexion,$_POST['pw']);

    $Editar = "UPDATE usuarios SET nombre = '$Nombre', apellido = '$Apellido', correo = '$Correo', tel = '$Tel', 
    pw = '$Pw' WHERE id = '$Id'";

    echo $Resultado = mysqli_query($Conexion, $Editar);

    mysqli_close($Conexion);

?>