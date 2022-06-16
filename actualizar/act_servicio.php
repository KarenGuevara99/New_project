<?php
 
 error_reporting(0);

 include("../Connection/conexion.php");

$doc = $_POST["idserv"];
$nombre = $_POST["nombserv"];

$actualizar =   "update servicios set id_servicio = '$doc', nomb_servicio = '$nombre'
                where id_servicio = '$doc'";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados = mysqli_query($conexion,$actualizar);

if($resultados){
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
} else{
    echo "<script>alert('" .'Error en Actualizacion' . "' );</script>";
}

mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin/admin_servicios.php'; </script>";

?>