<?php
error_reporting(0);
include("Connection/conexion.php");



$Nservicio = $_POST["Nservicio"];


echo "<script>console.log('Debug Objects: " . $Nservicio . "' );</script>";

$inservicios = "insert into servicios(id_servicio,nomb_servicio)
values ('','$Nservicio')";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados =  mysqli_query($conexion,$inservicios);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin_servicios.php'; </script>";

?>

