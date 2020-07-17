<?php

//**Conexión a la BD**//
  include 'Conexion.php';
//**Pasamos los datos desde el controlador a variables php**//
   $User = mysqli_real_escape_string ($Conexion,$_POST['correo']);//En los corchetes va la id del campo del formulario
   $Pass = mysqli_real_escape_string ($Conexion,$_POST['pw']);
   $Admin = 'joseb7q@gmail.com';


   $Select_Admin = "SELECT * FROM usuarios WHERE correo = '$Admin' AND pw = '$Pass'";
   $Res_Select_Admin = mysqli_query($Conexion,$Select_Admin);
   if(mysqli_num_rows($Res_Select_Admin) == 1){
       echo "1";
   }else if(mysqli_num_rows($Res_Select_Admin) == 0){
       $Select = "SELECT correo, pw FROM usuarios WHERE correo = '$User' AND pw = '$Pass'";
       $Resultado = mysqli_query($Conexion,$Select);
       if(mysqli_num_rows($Resultado) > 0 ){
           echo '2';
       }else {
           echo '0';
       }
   }
//Cerrar la conexión
    mysqli_close($Conexion);
?>
