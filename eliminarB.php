<?php 
    if(!isset($_GET['codigo'])){
        header('Location: registropersona.php?mensaje=error');
        exit();
    }

    include 'clases/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: registropersona.php?mensaje=eliminado');
    } else {
        header('Location: registropersona.php?mensaje=error');
    }
    
?>