<?php
    session_start();
    include_once 'back/conexion.php';
    $usuario = $_POST['txtUsu'];
    $contraseña = $_POST['txtPass'];
    $sentencia = $bd->prepare('select * from t_usuario where nombre_usu = ? and password_usu = ?;');
    $sentencia->execute([$usuario, $contraseña]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);
    
    if ($datos === FALSE) {
        header('Location: login.php');
    }elseif ($sentencia->rowCount() == 1) {
        $_SESSION['nombre'] = $datos->nombre_usu;
        header('Location: index.php');
    }
?>