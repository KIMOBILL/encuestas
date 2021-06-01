<?php  if ((isset($_POST['Enviar']))) {$consulta= 'insert into KIMOBILL.formulario1 values(default,"'.$_POST["txtOption1"].'","'.$_POST["restxtOption1"].'","'.$_POST["txtSelect2"].'","'.$_POST["restxtSelect2"].'","'.$_POST["txtOption3"].'","'.$_POST["restxtOption3"].'");';$servidor = 'localhost:3307';
    $usuario = 'root';
    $pass = 'Root2021';
    $bdd='KIMOBILL';
    $conexion = new mysqli($servidor, $usuario, $pass, $bdd);
    if ($conexion->query($consulta)) {
        $respuesta = 1;
    } else {
        $respuesta = 0;
    }
    echo $respuesta;}  ?>
