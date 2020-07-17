$('#registrar').click(function(event){
    event.preventDefault();
    var nombre, apellido, correo, tel, pw, exNom, exApe, excorreo, expTel, expClave, expe;
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    correo = $('#correo').val();
    tel = $('#tel').val();
    pw = $('#pw').val();
    
//**Expresiones Regulares**//
    
    exNom= /^([a-z ñáéíóú]{2,60})$/i;
    exApe= /^([a-z ñáéíóú]{2,60})$/i;
    excorreo =  /^\w+([\.-]?\w+)*@(?:|outlook|gmail|utnay|)\.(?:|com|edu|)\.(?:|mx|)$/;
    expe = /^\w+([\.-]?\w+)*@(?:|outlook|gmail|)\.(?:|com|)$/
    expTel= /[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){3}|(\d{2}[\*\.\-\s]){4}|(\d{4}[\*\.\-\s]){2})|\d{8}|\d{10}|\d{12}/;
    expClave= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,16}$/;

   
    if(nombre.length == 0 || apellido.length == 0 || correo.length == 0 || tel.length == 0 || pw.length == 0 ){
        swal.fire("Error...","Todos los campos son obligatorios", "error");
        return false;
    }
    else if(!exNom.test(nombre)) {
        swal.fire("Error...", "El nombre es muy largo solo se aceptan 15 caracteres", "error");
        return false;
    }
    else if(!exApe.test(apellido)) {
        swal.fire("Error...","El apellido paterno es muy largo solo se aceptan 15 caracteres", "error");
        return false;
    }
    else if(correo.length>30) {
        swal.fire("Error...","El correo es muy largo solo se aceptan 15 caracteres", "error");
        return false;
    }
    else if(!excorreo.test(correo) == !expe.test(correo)) {
        swal.fire("Error...","El correo no es valido", "error");
        return false;
    }
    else if(tel.length>10) {
        swal.fire("Error...","El telefono es muy largo solo se aceptan 10 caracteres", "error");
        return false;
    }
    else if(!expTel.test(tel)) {
        swal.fire("Error...","El telefono no es valido", "error");
        return false;
    }
    else if(isNaN(tel)) {
        swal.fire("Error...","El telefono que ingreso no son numeros", "error");
        return false;
    }
    else if(!expClave.test(pw)) {
        swal.fire("Error...","La contraseña no es valida", "error");
        return false;
    }
        swal.fire("Muy bien", "Datos registrados correctamente" , "success");
    
    
//**Inicio de Ajax**//

var datos= "nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&tel="+tel+"&pw="+pw;

//**Envío de datos al modelo: registro.php**//
$.ajax({
        url: 'php/Registro.php',
        type: 'POST',
        data: datos,
    })
    .done(function(res) {
        /*if para revisar si el correo ya se encuentra registrado o no en la BD
        respuesta 1 es que se registro en la BD
        respuesta 0 es porque ya esta registrado el correo en la BD*/
        if(res==1){
            Swal.fire("Muy bien", "Registro exitoso", "success");
            return false;
        } else if (res==0){
            Swal.fire("Error", "El usuario ya esta registrado", "error");
            return false;
        }
        $('.input').val(""); //con esto se vacian los datos del formulario una vez que se envian a registrar
        
    })
    .fail(function(res) {
        console.log(res);
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    })

});


//Controlador modal registrar
//Almacenar los valores en cada variable
$('#registrarAdmin').click(function(event){
    event.preventDefault();//evitar que envie los datos sin usar AJAX
    //recibimos los datos desde el formulario registro
    var nombre, apellidos, correo, tel, password, exNom, exApe, excorreo, expTel, expClave, expe;
    nombre = $('#Nombre').val();
    apellidos = $('#Apellidos').val();
    correo = $('#Correo').val();
    tel = $('#Tel').val();
    password = $('#pwd').val();
  
    exNom= /^([a-z ñáéíóú]{2,60})$/i;
    exApe= /^([a-z ñáéíóú]{2,60})$/i;
    excorreo =  /^\w+([\.-]?\w+)*@(?:|outlook|gmail|utnay|)\.(?:|com|edu|)\.(?:|mx|)$/;
    expe = /^\w+([\.-]?\w+)*@(?:|outlook|gmail|)\.(?:|com|)$/;
    expTel= /[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){3}|(\d{2}[\*\.\-\s]){4}|(\d{4}[\*\.\-\s]){2})|\d{8}|\d{10}|\d{12}/;
    expClave= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,16}$/;
  
    //Evaluar los valores
    if(nombre.length == 0 || apellidos.length == 0 || correo.length == 0 || tel.length == 0 || password.length == 0 ){
        swal.fire("Error...","Todos los campos son obligatorios", "error");
        return false;
    }
    else if(!exNom.test(nombre)) {
        swal.fire("Error...", "El nombre no es valido", "error");
        return false;
    }
    else if(!exApe.test(apellidos)) {
        swal.fire("Error...","El apellido no es valido", "error");
        return false;
    }
    else if(correo.length>45) {
        swal.fire("Error...","El correo es muy largo solo se aceptan 15 caracteres", "error");
        return false;
    }
    else if(!excorreo.test(correo) == !expe.test(correo)) {
        swal.fire("Error...","El correo no es valido ", "error");
        return false;
    }
    else if(tel.length>10) {
        swal.fire("Error...","El telefono es muy largo solo se aceptan 10 caracteres", "error");
        return false;
    }
    else if(!expTel.test(tel)) {
        swal.fire("Error...","El telefono no es valido", "error");
        return false;
    }
    else if(isNaN(tel)) {
        swal.fire("Error...","El telefono que ingreso no son numeros", "error");
        return false;
    }
    else if(!expClave.test(password)) {
        swal.fire("Error... Clave no valida","Debe contener mínimo 8 caracteres, máximo 16, Al menos una letra mayúscula y minúscula, Al menos 1 dígito y 1 carácter especial, no acepta espacios en blanco", "error");
        return false;
    }
    swal.fire("Muy bien", "Datos registrados correctamente" , "success");
    
  
  //Una vez validado los datos hacemos la cadena de los datos para enviarlos al modelo utilizando AJAX
  var datos = "nombre="+nombre+"&apellido="+apellidos+"&correo="+correo+"&tel="+tel+"&pw="+password;
    
  //mandamos los datos al modelo: registro.php por el metodo POST y la cadena se creo anteriormente para su registro en la 80
  $.ajax({
      url: '../php/Registro.php',
      type: 'POST',
      data: datos,
  }) //si es satisfactoria la respuesta del modelo
  .done(function(res) {
      //Es 1 porque se registro satisfactoriamente el la BD
      if(res==1){
          $('#tabla').load('Tabla.php');
       swal.fire("Muy bien", "Registro satisfactorio", "success");
      
      }else if(res==0){ //Es 0 porque no se registro ya que el correo existia en la BD
       swal.fire("Error...", "El usuario ya se encuentra registrado", "error");
      }
      $('.input').val("");//vaciamos los input del formulario una vez enviado.
  })//si falla o hay error en la comunicacion con el modelo
  .fail(function(res) {
      console.log(res);
      console.log("error");
  }) //siempre se ejecuta en cualquiera de los dos casos anteriores
  .always(function() {
      console.log("complete");
  });
  
  });
  
  //********************************************************************************************************************************* */
    //Comenzamos las funciones para realizar la edicion, 2 partes, 1. llenado automatico del modal con los datos, 2, Edicion.

    //1. Funcion para el llenado automatico del modal, se recibe la cadena que viene del modelo tabla.php
    function agregarFormulario(datos){
        //alert(datos);// Este alert solo es para ver si estamos jalando los datos de php
        //Separados la cadena que traemos de php utilizando || como referencia
        d=datos.split('||');
        //asignamos los valores del arreglo que nos genero con los datos
        id = $('#IdE').val(d[0]);
        nombre = $('#NombreE').val(d[1]);
        apellidos = $('#ApellidosE').val(d[2]);
        correo = $('#CorreoE').val(d[3]);
        tel = $('#TelE').val(d[4]);
        password = $('#pwdE').val(d[5]);
        $('#CorreoE').attr('disabled', true); //deshabilitamos el campo de texto correo para que el usuario no lo pueda editar, ya que si pone un correo repetido nos daria problemas
    }
  
//Controlador modal editar
//Almacenar los valores en cada variable
  $('#EditarAdmin').click(function(event){
    event.preventDefault();//evitar que envie los datos sin usar AJAX
    //recibimos los datos desde el formulario registro
    var id, nombre, apellidos, correo, tel, password, exNom, exApe, excorreo, expTel, expClave, expe;
    id = $('#IdE').val();
    nombre = $('#NombreE').val();
    apellidos = $('#ApellidosE').val();
    correo = $('#CorreoE').val();
    tel = $('#TelE').val();
    password = $('#pwdE').val();

    exNom= /^([a-z ñáéíóú]{2,60})$/i;
    exApe= /^([a-z ñáéíóú]{2,60})$/i;
    excorreo =  /^\w+([\.-]?\w+)*@(?:|outlook|gmail|utnay|)\.(?:|com|edu|)\.(?:|mx|)$/;
    expe = /^\w+([\.-]?\w+)*@(?:|outlook|gmail|)\.(?:|com|)$/;
    expTel= /[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){3}|(\d{2}[\*\.\-\s]){4}|(\d{4}[\*\.\-\s]){2})|\d{8}|\d{10}|\d{12}/;
    expClave= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,16}$/;

    //Evaluar los valores
    if(nombre.length == 0 || apellidos.length == 0 || correo.length == 0 || tel.length == 0 || password.length == 0 ){
        swal.fire("Error...","Todos los campos son obligatorios", "error");
        return false;
    }
    else if(!exNom.test(nombre)) {
        swal.fire("Error...", "El nombre no es valido", "error");
        return false;
    }
    else if(!exApe.test(apellidos)) {
        swal.fire("Error...","El apellido no es valido", "error");
        return false;
    }
    else if(correo.length>45) {
        swal.fire("Error...","El correo es muy largo solo se aceptan 15 caracteres", "error");
        return false;
    }
    else if(!excorreo.test(correo) == !expe.test(correo)) {
        swal.fire("Error...","El correo no es valido ", "error");
        return false;
    }
    else if(tel.length>10) {
        swal.fire("Error...","El telefono es muy largo solo se aceptan 10 caracteres", "error");
        return false;
    }
    else if(!expTel.test(tel)) {
        swal.fire("Error...","El telefono no es valido", "error");
        return false;
    }
    else if(isNaN(tel)) {
        swal.fire("Error...","El telefono que ingreso no son numeros", "error");
        return false;
    }
    else if(!expClave.test(password)) {
        swal.fire("Error... Clave no valida","Debe contener mínimo 8 caracteres, máximo 16, Al menos una letra mayúscula y minúscula, Al menos 1 dígito y 1 carácter especial, no acepta espacios en blanco", "error");
        return false;
    }
    swal.fire("Muy bien", "Datos registrados correctamente" , "success");

    //Una vez validado los datos hacemos la cadena de los datos para enviarlos al modelo utilizando AJAX
  var datos = "id="+id+"&nombre="+nombre+"&apellido="+apellidos+"&correo="+correo+"&tel="+tel+"&pw="+password;
    
  //mandamos los datos al modelo: registro.php por el metodo POST y la cadena se creo anteriormente para su registro en la 80
  
    $.ajax({
        url: 'Editar.php',
        type: 'POST',
        data: datos,
    }) //si es satisfactoria la respuesta del modelo
    .done(function(res) {
        //Es 1 porque se registro satisfactoriamente el la BD
        if(res==1){
            $('#tabla').load('Tabla.php');
        swal.fire("Muy bien", "Edición existosa", "success");
        
    }else if(res==0){ //Es 0 porque no se registro ya que el correo existia en la BD
      swal.fire("Error...", "Ocurrio un error en el servidor", "error");
    }
    $('.input').val("");//vaciamos los input del formulario una vez enviado.
    })//si falla o hay error en la comunicacion con el modelo
    .fail(function(res) {
        console.log(res);
        console.log("error");
    }) //siempre se ejecuta en cualquiera de los dos casos anteriores
    .always(function() {
        console.log("complete");
    });
    
    });
//Confirmacion de eliminar un registro de la BD
//Creamos una funcion el cual tendra un sweer alert de confirmacion para preguntar si realmente quiere eliminar el registro seleccionado
//En caso de confirmar se manda llamar la funcion de eliminarRegistro envianndo le el id del registro que se quiere eliminar

function confirmarEliminar(id){
    Swal.fire({
        title: '¿Eliminar Registro?',
        text: "¡No podras revertirlo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminarlo!'
      }).then((result) => {
        if (result.value) {
            //Mandamosllamar la funcion eliminarRegistro
            eliminarRegistro(id);
            //Esto lo pasamos a la funcion del ajax de eliminarRegistro, ya que el mensaje se desparara una vez confirmado la eliminacion del registro
          /*Swal.fire(
            'Eliminado!',
            'El registro ha sido eliminado.',
            'success'
          )*/
        }
      })
}
function eliminarRegistro(id){
    event.preventDefault();//Evitar que envie los datos sin usar el ajax
    var datos = "id="+id; //Creamos la cadena que se enviara al modelo por medio de un ajax

    $.ajax({
        url: 'Eliminar.php',
        type: 'POST',
        data: datos,
    })//Si es satisfactoria la respuesta del modelo
    .done(function(res){
        //Es 1 porque se registro se elimino satisfactoriamente en la BD
        if(res==1){
            $('#tabla').load('Tabla.php');//Recargamos la tabla ya sin el registro eliminado
            Swal.fire(//Este es el pedazo de codigo del sweet alert que se comento en la funcion confirmarEliminar()
            'Eliminado!',
            'El registro ha sido eliminado.',
            'success' )

        }else{
            swal.fire("Error...","Ocurrio un error en el servidor","error");//En caso de que no se haya eliminado el archivo por algun error del modelo

        }
    })//Si falla o hay un error en la comunicacion con el modelo
    .fail(function(res){
        console.log(res);
        console.log("error");
    })//Siempre se ejecuta en cualquiera de los dos cosos anteriores
    .always(function(){
        console.log("complete");
    });
}
