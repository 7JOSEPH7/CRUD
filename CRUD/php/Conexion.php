<?php

  //**Se reestablece la conexión con 4 parámetros: Servidor, Usuario, Contraseña y la Base de datos**//
  $Conexion= mysqli_connect("localhost","root","","iti");
  //**Mensaje de error si no se establece conexión con la BD**//
   if(!$Conexion){
       echo 'Error en la conexión con la BD';    
   }/*else{
       echo 'Conectado a la BD';
   }*/

?>