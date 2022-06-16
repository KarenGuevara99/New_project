<?php
 
 error_reporting(0);

 include("../Connection/conexion.php");

$plate = $_POST["Plate"];
$reference = $_POST["Reference"];
$mark = $_POST["Mark"];
$model = $_POST["Model"];
$owner =$_POST["Owner"];

$actualizar =   "UPDATE vehiculos SET ref_vehiculo = '$reference', marca_vehiculo = '$mark', 
                mod_vehiculo ='$model', idpro_vehiculo = '$owner'
                WHERE id_vehiculo = '$plate'";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados = mysqli_query($conexion,$actualizar);

if($resultados){
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
} else{
    echo "<script>alert('" .'Error en Actualizacion' . "' );</script>";
}

mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin/admin_vehiculos.php'; </script>";

?>