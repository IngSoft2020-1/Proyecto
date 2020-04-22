<!--Eliminar/Editar un usuario (interfaz)-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- MY STYLES -->
    <link rel="stylesheet" href="css/su.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>Eliminar usuario</title>
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
        <li><a href="login.php">Salir</a></li>
      </ul>
    </header>
    <section>
      <div id="container-white">
        <div class="container">
          <img src="img/delete.png" alt="" id="logo">
        </div>
        <div class="container">
          <aside class="container-table" style="overflow-x:auto;">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="tasks"></tbody> <!--Donde se hace la magia con json-->
            </table>
          </aside>
        </div>
      </div>
    </section>
    </div>
    <script src="app.js"></script> <!--Manda a llamar al json-->
  </body>
</html>