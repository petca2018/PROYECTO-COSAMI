<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtEcivil"]) || empty($_POST["txtDireccion"])|| empty($_POST["txtGrupo"])){
        header('Location: inicioB.php?mensaje=falta');
        exit();
    }

    include_once 'clases/conexion.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $ecivil = $_POST["txtEcivil"];
    $direccion = $_POST["txtDireccion"];
    $grupo = $_POST["txtGrupo"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,estadocivil,direccion,grupo) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre, $edad, $ecivil, $direccion, $grupo]);

    if ($resultado === TRUE) {
        header('Location: inicioB.php?mensaje=registrado');
    } else {
        header('Location: inicioB.php?mensaje=error');
        exit();
    }
    
?>