<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: registropersona.php?mensaje=error');
    }

    include 'clases/conexion.php';
    $nombre = $_POST["txtNombre"];
    $cui = $_POST["txtCUI"];
    $edad = $_POST["txtEdad"];
    $ecivil = $_POST["txtEcivil"];
    $direccion = $_POST["txtDireccion"];
    $codigo = $_POST['codigo'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, cui = ?, edad = ?, estadocivil = ?, direccion = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $cui, $edad, $ecivil, $direccion, $codigo]);

    if ($resultado === TRUE) {
        header('Location: registropersona.php?mensaje=editado');
    } else {
        header('Location: registropersona.php?mensaje=error');
        exit();
    }
    
?>