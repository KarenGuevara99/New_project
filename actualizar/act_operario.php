<?php
 
 error_reporting(0);

 include("../Connection/conexion.php");

$doc = $_POST["doc"];
$nombre = $_POST["nomb"];
$apellido = $_POST["ape"];
$cargo = $_POST["pos"];


$actualizar =   "update operarios set  id_operario = '$doc', nomb_operario = '$nombre', 
apell_operario = '$apellido',  idcargo_operario = '$cargo'
where id_operario = '$doc'";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados = mysqli_query($conexion,$actualizar);

if($resultados){
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
} else{
    echo "<script>alert('" .'Error en Actualizacion' . "' );</script>";
}

mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin/admin_operadores.php'; </script>";

?>