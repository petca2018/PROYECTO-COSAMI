<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: registropersona.php?mensaje=error');
    }

    include 'clases/conexion.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $ecivil = $_POST["txtEcivil"];
    $direccion = $_POST["txtDireccion"];
    $grupo = $_POST["txtGrupo"];
    $codigo = $_POST['codigo'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, estadocivil = ?, direccion = ?, grupo = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $ecivil, $direccion,$grupo, $codigo]);

    if ($resultado === TRUE) {
        header('Location: registropersona.php?mensaje=editado');
    } else {
        header('Location: registropersona.php?mensaje=error');
        exit();
    }
    
?>