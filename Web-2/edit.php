<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <title>Editar</title>
  </head>
  <body>
    <div class="container">
      <div class="container-img">
        <img src="img/editar.png" alt="" class="icon-title">
      </div>
      <div class="container-table" style="overflow-x:auto;">
        <table>
            <thead>
              <tr>
                <th style="color: #00FF80;">Nombre</th>
                <th style="color: #00FF80;">Correo</th>
                <th style="color: #EC6D4A;">Telefono</th>
                <th style="color: #EC6D4A;">Tipo de Usuario</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody id="tasks"></tbody> <!--Donde se hace la magia con json-->
          </table>
      </div>
    </div>
  </body>
  <script src="js/app.js"></script> <!--Manda a llamar al json-->
  <link rel="stylesheet" href="css/edit.css">
</html>
