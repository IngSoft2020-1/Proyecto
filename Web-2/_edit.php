<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- MIS SCRIPT -->
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/edit.css">
    <title>Editar</title>
  </head>
  <body>
    <div class="container">
      <div class="container-img">
        <img src="img/editar.png" alt="" class="icon-title">
      </div>
      <div class="container-form">
        <form action="register.php" method="post">
          <div class="field line">
            <label for="">Nombre</label>
            <img src="img/name.png" alt="" class="icon">
            <input type="text" placeholder="Nombre" class="textbox" name="usuario" required autocomplete="off">
          </div>
          <div class="field line">
            <label for="">Apellidos</label>
            <img src="img/name.png" alt="" class="icon">
            <input type="text" placeholder="Apellidos" class="textbox" name="apellido" required autocomplete="off">
          </div>
          <div class="field line">
            <label for="">Correo</label>
            <img src="img/mail.png" alt="" class="icon">
            <input type="text" placeholder="Correo" class="textbox" name="correo1" required autocomplete="off">
          </div>

          <div class="field line">
            <label for="">Contraseña</label>
            <img src="img/lock.png" alt="" class="icon">
            <input type="password" placeholder="Contraseña" class="textbox" name="contrasena1" required autocomplete="off">
          </div>
          <div class="field" id="field-button">
            <input type="button" id="btn-cancel" value="Cancelar">
            <input type="submit" name=""  class="button-save" value="Guardar">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
