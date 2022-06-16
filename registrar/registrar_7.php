<?php
error_reporting(0);
include("Connection/conexion.php");



$Fecha = $_POST["Fecha"];
$Placa = $_POST["Placa"];
$Prop = $_POST["Prop"];
$Numero = $_POST["Numero"];
$Detalle = $_POST["Detalle"];
$Operario = $_POST["Operario"];
$Kilo = $_POST["kilo"];

echo "<script>console.log('Debug Objects: " . $Fecha . "' );</script>";

$insertar = "insert into servicios_detalle(id_detalle,fecha_detalle,idvehi_detalle,
idpro_detalle,idservicio_detalle,observ_detalle,idope_detalle,kilo_detalle)
values ('','$Fecha','$Placa','$Prop','$Numero','$Detalle','$Operario','$Kilo')";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados =  mysqli_query($conexion,$insertar);
if(!$resultados){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../n_servicio/n_servicio_admin.php'; </script>";

?>

