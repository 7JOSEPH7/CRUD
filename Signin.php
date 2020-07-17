
<!DOCTYPE html>
<html>
<head>
	<title>Inicia sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/logstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
     <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.css"></link>
    
</head>
<body>
  <div class="cont">
    <form class="form sign-in" method="POST" id="form_login">
     <div id="mensaje_login"></div>
      <h2>Login</h2>
      <label>
      <div class="one">
          <span>Usuario</span></div>
        <input type="text" id="user" name="user" required>
      </label>
      <label>
       <div class="two">
           <span>Contraseña</span></div>
        <input type="password" id="pass" name="pass" required>
         
      </label>
      <button class="submit" type="submit" name="login" value="Inicio" id="inicio">Iniciar sesión</button>
      <p class="forgot-pass">Olvidaste tu contraseña ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/google.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Eres nuevo?</h2>
          <p>Registrate y descubre una gran cantidad de oportunidades!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Registrate</span>
          <span class="m-in">Ingresa</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Registrate</h2>
        <label>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </label>
        <label>
          <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
        </label>
        <label>
          <input type="email" id="correo" name="correo" placeholder="Correo" required>
        </label>
        <label>
          <input type="text" id="tel" name="tel" placeholder="Teléfono" required>
        </label>
        <label>
          <input type="password" id="pw" name="pw" placeholder="Contraseña" required>
        </label>
        <button type="button" value="Registrar" id="registrar" class="submit">Registrar</button>
      </div>
    </div>
  </div>
   

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
   <script src="js/Controlador.js"></script>
   <script src="js/ControladorI.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 
</body>
</html>