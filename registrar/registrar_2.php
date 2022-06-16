<?php
error_reporting(0);
include("Connection/conexion.php");

$Plate = $_POST['Plate'];
$Reference = $_POST['Reference'];
$Mark = $_POST['Mark'];
$Model = $_POST['Model'];
$Owner = $_POST['Owner'];

echo "<script>console.log('Debug Objects: " . $Plate . "' );</script>";

$insertarVehiculo ="insert into vehiculos(id_vehiculo,ref_vehiculo,marca_vehiculo,mod_vehiculo,idpro_vehiculo)
values ('$Plate','$Reference','$Mark','$Model','$Owner');";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$result =  mysqli_query($conexion,$insertarVehiculo);
if(!$result){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../admin/admin_vehiculos.php'; </script>";
?>