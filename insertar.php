<?php
if (!isset($_POST['oculto'])) {
    exit();
}

include 'back/conexion.php';
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];
$nombre = $_POST['txtNombre'];
$parcial = $_POST['txtParcial'];
$final = $_POST['txtFinal'];

$sentencia = $bd->prepare("INSERT INTO estudiantes(ap_paterno,ap_materno,nombres,ex_parcial,ex_final) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$paterno, $materno, $nombre, $parcial, $final]);

if ($resultado === TRUE) {
    //echo ("Agragado correctamente");
    header('location: index.php');
} else {
    echo "Error";
}
?>