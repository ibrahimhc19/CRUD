<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];

include_once "conexion.php";

$conexion = conexion();

$sql="DELETE FROM contactos WHERE telefono=$telefono";
$query = mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=index.php");
}

?>