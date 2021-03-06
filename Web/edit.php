<!--Registro de un usuario nuevo (interfaz)-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- MY STYLES -->
    <link rel="stylesheet" href="css/su.css">
    <title>Editar</title>
  </head>
  <body>
    <div id="container">
      <header>
      <ul class="nav">
        <li><a href="superUser.html">Inicio</a></li>
        <li>
          <a href="#">Usuario</a>
          <ul>
            <li><a href="add.html">Crear usuario</a></li>
            <li><a href="delete.html">Eliminar usuario</a></li>
          </ul>
        </li>
        <li><a href="#">Reservaciones</a></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="login.php">Salir</a></li>
      </ul>
    </header>
    <section>
      <div id="container-white">
        <div class="container">
          <img src="img/edit.png" alt="" id="logo">
        </div>
        <div class="container">
          <form class="" action="index.html" method="post">
            <div class="field line">
              <img src="img/user.png" alt="" class="icon">
              <input type="text" placeholder="Nombre" class="textbox" name="usuario" required>
            </div>
            <div class="field line">
              <img src="img/user.png" alt="" class="icon">
              <input type="text" placeholder="Apellidos" class="textbox" name="usuario" required>
            </div>
            <div class="field line">
              <img src="img/mail.png" alt="" class="icon">
              <input type="text" placeholder="Correo" class="textbox" name="usuario" required>
            </div>
            <div class="field line">
              <img src="img/lock.png" alt="" class="icon">
              <input type="text" placeholder="Contraseña" class="textbox" name="usuario" required>
            </div>
            <div class="field">
              <input type="submit" value="Guardar" id="button-start">
            </div>
          </form>
        </div>
      </div>

    </section>
    </div>
  </body>
</html>
