<?php
 
 error_reporting(0);

 include("../Connection/conexion.php");

$doc = $_POST["doc"];
$nombre = $_POST["nomb"];
$password = $_POST["pass"];
$role = $_POST["rol"];

$actualizar =   "update usuarios set id_usuario = '$doc', nomb_usuario = '$nombre', 
                cont_usuiario = '$password', rol_usuario = '$role'
                where id_usuario = '$doc'";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados = mysqli_query($conexion,$actualizar);

if($resultados){
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
} else{
    echo "<script>alert('" .'Error en Actualizacion' . "' );</script>";
}

mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin/admin_usuarios.php'; </script>";

?>