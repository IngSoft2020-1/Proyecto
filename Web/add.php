<?php
  session_start();
  error_reporting(0);

  if($_SESSION['creado'] == '0'){
    echo "<script>alert('Ocurrio un error.');</script>";
  }
  else if($_SESSION['creado'] == '1'){
  	echo "<script>alert('Usuario registrado.');</script>";
  }
  else if($_SESSION['creado'] == '2'){
  	echo "<script>alert('Usuario ya existente.');</script>";
  }
  $_SESSION['creado'] = "";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- MY STYLES -->
    <link rel="stylesheet" href="css/su.css">
    <title>Agregar usuario</title>
  </head>
  <body>
    <div id="container">
      <header>
        <ul class="nav">
          <li><a href="superUser.php">Inicio</a></li>
          <li>
            <a href="#">Usuario</a>
            <ul>
              <li><a href="add.php">Crear usuario</a></li>
              <li><a href="delete.php">Eliminar usuario</a></li>
            </ul>
          </li>
          <li><a href="#">Reservaciones</a></li>
          <li><a href="#">Perfil</a></li>
          <li><a href="#">Salir</a></li>
        </ul>
      </header>
      <section>
        <div class="container-white">
          <div class="container">
            <img src="img/add-user.png" alt="" id="logo">
          </div>
          <div class="container">
            <form action="register.php" method="post">
              <div class="field line">
                <img src="img/user.png" alt="" class="icon">
                <input type="text" placeholder="Nombre" class="textbox" name="usuario" required>
              </div>
              <div class="field line">
                <img src="img/user.png" alt="" class="icon">
                <input type="text" placeholder="Apellidos" class="textbox" name="apellido" required>
              </div>
              <div class="field line">
                <img src="img/mail.png" alt="" class="icon">
                <input type="text" placeholder="Correo" class="textbox" name="correo1" required>
              </div>
              <div class="field line">
                <img src="img/mail.png" alt="" class="icon">
                <input type="text" placeholder="Confirmar correo" class="textbox" name="correo2" required>
              </div>
              <div class="field line">
                <img src="img/lock.png" alt="" class="icon">
                <input type="password" placeholder="Contraseña" class="textbox" name="contrasena1" required>
              </div>
              <div class="field line">
                <img src="img/lock.png" alt="" class="icon">
                <input type="password" placeholder="Confirmar contraseña" class="textbox" name="contrasena2" required>
              </div>
              <div class="field">
                <input type="submit" value="Agregar" id="button-start">
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
