$('#inicio').click(function(event){
    event.preventDefault();
    var correo, password, expresion, expre,exClave;
     user = $('#user').val();
     pass = $('#pass').val();


     expre =  /^\w+([\.-]?\w+)*@(?:|outloaok|gmaail|utnay|)\.(?:|com|edu|)\.(?:|mx|)$/;
     expresion =  /^\w+([\.-]?\w+)*@(?:|outlook|gmail|)\.(?:|com|)$/;
     exClave= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,16}$/;


     if(user.length == 0 || pass.length == 0 ){
      swal.fire("Error...", "No debe de haber campos vacios!", "error");
      return false; 
     }
     else if(!expresion.test(user) == !expre.test(user)){
      swal.fire("Error...", "No se encuentra disponible el correo", "error");
      return false;
     }
      else if(!exClave.test(pass)){
        swal.fire("Error... Clave no valida","Debe contener mínimo 8 caracteres, máximo 16, Al menos una letra mayúscula y minúscula, Al menos 1 dígito y 1 carácter especial, no acepta espacios en blanco", "error");
        return false;
    }
      swal.fire("Bien...", "Se inicio sesion correctamente!", "success");

     //una vez validado los datos hacemos la cadena de los datos para
     var datos = "correo="+user+'&pw='+pass;

     //Mandamos los datos al modelo: login.php por el metodo POST y la cadena que se creo anteriormente para su registro en la BD
     $.ajax({
       url: 'php/Login.php',
       type: 'POST',
       data: datos,
     })//Si es satisfactoria la respuesta del modelo
     .done(function(res){
       if(res == '0'){
         swal.fire("Error...", "Credenciales incorrectas", "error");
       }else if(res== "1"){
         location.href = 'php/Admin.php';
       }else if(res=="2"){
         location.href = 'php/Usuario.php';
       }
     
       $('.input').val("");//vaciamos los input del formulario una vez enviado

     })//si falla o hay error
     .fail(function(){
       console.log("error")
     })
     .always(function(){
       console.log("complete");
     });
   });
  
