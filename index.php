<!DOCTYPE html>
<html>
<head>
    <meta charset=”UTF-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registro</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <form method="post" action="reg.php">
        <input type="submit" value="Nuevo usuario" name="submit">
        <input type="submit" value="Usuario existente" name="submit">
    </form>

    <?php
    include("reg.php");
    ?>
    
</body>
</html>