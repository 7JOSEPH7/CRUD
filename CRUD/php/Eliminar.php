<?php

include 'Conexion.php';

//pasamos los datos desde el CONTROLADOR a variables PHP en ELIMINAR.PHP
$Id = mysqli_real_escape_string($Conexion,$_POST['id']);

$Eliminar = "DELETE FROM  usuarios WHERE id = '$Id'";
echo $Resultado = mysqli_query($Conexion,$Eliminar);

mysqli_close($Conexion);

?>