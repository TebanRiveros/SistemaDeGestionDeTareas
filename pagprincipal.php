<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de tareas</title>
  <link rel="stylesheet" href="basee.css">
  <link rel="stylesheet" href="acordeoon.css">
</head>
<body>
  <h1>Gestion de tareas</h1>
  <section>
    <ul class='acordeon'>
      <li class='open'>
        <h2>Mis tareas</h2>
        <div>
        <ul>
            <?php if (!empty($paimprimir)): ?>
              <?php foreach ($paimprimir as $paimprimirr): ?>
                <li><?php echo $paimprimirr; ?></li>
              <?php endforeach; ?>
            <?php else: ?>
              <li>No hay tareas disponibles</li>
            <?php endif; ?>
          </ul>
        </div>
      </li>
      <li>
        <h2>Asignar tareas</h2>
        <div>
            <form method="post" action="reg.php">
                <h2>Escriba el nombre de la tarea</h2>
                <input type="text" name="nombretarea">
                <h2>Escriba la describcion de a tarea</h2>
                <input type="text" name="describ">
                <h2>Escriba la fecha limite</h2>
                <input type="text" name="fechat">
                <h2>Escriba el usuario asiganado</h2>
                <input type="text" name="uasig">
                <h2>Escriba el estado de la tarea</h2>
                <input type="text" name="est">
                <input type="submit" value="Asigar" name="asignar">
            </form>
        </div>
      </li>

    </ul>
  </section>
  <script src="acordeon.js"></script>
  <?php
    include("reg.php");
    ?>
    
</body>
</html>