<?php
   $inc=include("con_db.php");
   $usuario = 'xd';
   $paimprimir = array();
    if (isset($_POST['submit'])) {
        $buttonValue = $_POST['submit'];
        
        if ($buttonValue === "Nuevo usuario") {
            // Redireccionar a ingresonuevo.php
            header("Location: ingresonuevo.php");
            exit;
        } elseif ($buttonValue === "Usuario existente") {
            // Redireccionar a ingresoexistente.php
            header("Location: ingresoexistente.php");
            exit;
        }
    }

    if (isset($_POST['botcrear'])){
        if (strlen($_POST["nonuevo"])>=1){
            $usuario=trim($_POST["nonuevo"]);
            $consulta="INSERT INTO `usuarios`(`nomusuario`) VALUES ('$usuario')";
            $resultado=mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                <h3 class="Registro exitoso">todo melo</h3>
                <?php
                header('Location: pagprincipal.php');
            }else {
                ?>
                <h3 class="bad">Ops algo salio mal</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="bad">El espacio esta vacio</h3>
            <?php
        }

    }



    if (isset($_POST['botbuscar'])){
        if (strlen($_POST["noexis"])>=1){
            $usuario=$_POST['noexis'];
            $hacer="SELECT * FROM usuarios";
            $resultado=mysqli_query($conex, $hacer);
            $mirar=0;
            while($consulta= mysqli_fetch_array($resultado)){
                
                if ($consulta['nomusuario']==$usuario){
                    $mirar=1;
                }
            }
            if ($mirar){
                ?>
                <h3 class="ok">Bienvenido</h3>
                <?php
                header('Location: pagprincipal.php');
                
            }else{
                ?>
                <h3 class="bad">Usuario no encontrado</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="bad">El espacio esta vacio</h3>
            <?php
        }
    }

    if (isset($_POST['asignar'])){
        if (strlen($_POST["nombretarea"])>=1 && strlen($_POST["describ"])>=1 && strlen($_POST["fechat"])>=1 && strlen($_POST["uasig"])>=1 && strlen($_POST["est"])>=1){
            $nombret=trim($_POST["nombretarea"]);
            $describt=trim($_POST["describ"]);
            $fect=trim($_POST["fechat"]);
            $uasigt=trim($_POST["uasig"]);
            $estat=trim($_POST["est"]);
            $asignando="INSERT INTO `tarea`(`nombret`, `descripcion`, `nomusuarios`, `fecha`, `progreso`) VALUES ('$nombret', '$describt','$fect','$uasigt','$estat')";
            $resultadox=mysqli_query($conex, $asignando);
            if ($resultadox){
                ?>
                <h3 class="Registro exitoso">todo melo</h3>
                <?php
                
            }else {
                ?>
                <h3 class="bad">Ops algo salio mal</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="bad">El espacio esta vacio</h3>
            <?php
        }
    }


    if ($inc && $usuario != 'xd') {
        $ha = "SELECT * FROM usuarios";
        $re = mysqli_query($conex, $ha);
        $mirar = 0;
        while ($co = mysqli_fetch_array($re)) {
           if ($co['nomusuario'] == $usuario) {
              $paimprimir[] = $co; // Agregar valores al arreglo
           }
        }
     }






?>