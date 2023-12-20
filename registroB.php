<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"])|| empty($_POST["txtCUI"]) || empty($_POST["txtEdad"]) || empty($_POST["txtEcivil"]) || empty($_POST["txtDireccion"])){
        header('Location: registropersona.php?mensaje=falta');
        exit();
    }

    include_once 'clases/conexion.php';
    $nombre = $_POST["txtNombre"];
    $cui = $_POST["txtCUI"];
    $edad = $_POST["txtEdad"];
    $ecivil = $_POST["txtEcivil"];
    $direccion = $_POST["txtDireccion"];
    
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,cui,edad,estadocivil,direccion) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre, $cui, $edad, $ecivil, $direccion]);

    if ($resultado === TRUE) {
        header('Location: registropersona.php?mensaje=registrado');
    } else {
        header('Location: registropersona.php?mensaje=error');
        exit();
    }
    
?>