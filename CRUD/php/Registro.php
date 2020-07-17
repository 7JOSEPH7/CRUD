<?php
        
    //conexion a la BD
    include 'Conexion.php';

    //pasamos los datos desde el controlador a variables PHP
    //usamos el metodo mysqli_real_escape_string para inyectar sql a la BD
    $Nombre = mysqli_real_escape_string($Conexion,$_POST['nombre']);
    $Apellido = mysqli_real_escape_string($Conexion,$_POST['apellido']);
    $Correo = mysqli_real_escape_string($Conexion,$_POST['correo']);
    $Tel = mysqli_real_escape_string($Conexion,$_POST['tel']);
    $Pw = mysqli_real_escape_string($Conexion,$_POST['pw']);

    //realizamos una consulta para saber si el correo ya esta registrado en la BD
    $Select = "SELECT * FROM usuarios WHERE correo ='$Correo'";
    $Respuesta_Select = mysqli_query($Conexion,$Select);

    //si el correo no esta registrado en la BD lo insertamos
    if(mysqli_num_rows($Respuesta_Select) == 0){

    //guardamos en una variable la consulta a la BD para insertar datos
    $Insertar = "INSERT INTO usuarios (nombre, apellido, correo, tel, pw) VALUES('$Nombre','$Apellido','$Correo','$Tel','$Pw')";
    //ejecutamos la consulta y el resultado de la insercion
    $Resultado = mysqli_query($Conexion, $Insertar);
    echo "1";

    } else { //si el correo ya estaba en la BD
        echo  "0";
    }

mysqli_close($Conexion);
    

?>