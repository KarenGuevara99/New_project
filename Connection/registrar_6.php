<?php
error_reporting(0);
include("Connection/conexion.php");



$nombuser = $_POST["nombuser"];
$contuser = $_POST["contuser"];
$roluser = $_POST["roluser"];


echo "<script>console.log('Debug Objects: " . $nombuser . "' );</script>";

$insertuser = "insert into usuarios(id_usuario,nomb_usuario,cont_usuiario,rol_usuario)
values ('','$nombuser','$contuser','$roluser')";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados =  mysqli_query($conexion,$insertuser);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin_usuarios.php'; </script>";

?>