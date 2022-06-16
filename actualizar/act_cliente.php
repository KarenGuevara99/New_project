<?php
 
 error_reporting(0);

 include("../Connection/conexion.php");

$doc = $_POST["doc"];
$nombre = $_POST["nomb"];
$apellido = $_POST["ape"];
$telefono = $_POST["tel"];
$correo =$_POST["correo"];
$ciudad =$_POST["ciudad"];

$actualizar =   "UPDATE clientes SET id_cliente = '$doc', nomb_cliente = '$nombre', 
                apell_cliente = '$apellido', tel_cliente = '$telefono', correo_cliente = '$correo', 
                ciudad_cliente = '$ciudad'
                WHERE id_cliente = '$doc'";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$resultados = mysqli_query($conexion,$actualizar);

if($resultados){
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
} else{
    echo "<script>alert('" .'Error en Actualizacion' . "' );</script>";
}

mysqli_close($conexion);

echo "<script>window.location = '/New_Project/admin/admin_clientes.php'; </script>";

?>