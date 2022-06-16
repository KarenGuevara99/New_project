<?php
error_reporting(0);
include("Connection/conexion.php");

$Documentop = $_POST['Documentop'];
$Nameop = $_POST['Nameop'];
$Lastnameop = $_POST['Lastnameop'];
$Positionop = $_POST['Positionop'];

$insertoperadores ="insert into operarios(id_operario,nomb_operario,apell_operario,idcargo_operario)
values ('$Documentop','$Nameop','$Lastnameop','$Positionop')";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$result =  mysqli_query($conexion, $insertoperadores);
if(!$result){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin_operadores.php'; </script>";
?>