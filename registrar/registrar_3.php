<?php
error_reporting(0);
include("../Connection/conexion.php");

$Document = $_POST['Document'];
$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
$Phone = $_POST['Phone'];
$mail = $_POST['mail'];
$City = $_POST['City'];

$clientes ="insert into clientes(id_cliente,nomb_cliente,apell_cliente,tel_cliente,correo_cliente,ciudad_cliente)
values ('$Document','$Name','$Lastname','$Phone','$mail','$City')";

$conexion = mysqli_connect("localhost","root","","Admin_Historial_Vehicular_DB");

$result =  mysqli_query($conexion,$clientes);
if(!$result){
    echo "<script>alert('" .'Error en Registro' . "' );</script>";
} else{
    echo "<script>alert('" .'Registro Exitoso' . "' );</script>";
    
}
mysqli_close($conexion);

echo "<script>window.location = '../admin/admin_clientes.php'; </script>";
?>