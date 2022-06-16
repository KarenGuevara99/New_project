<?php
include("connection/conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];

session_start();
$SESSION['usuario']=$usuario; 



$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:admin_usuarios.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">INGRESE USUARIO Y/O CONTRASEÑA VÁLIDA</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);




<?php
session_start();
error_reporting(0);
include("../Connection/conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$_SESSION['usuario'] = $usuario;

$consulta = "SELECT * FROM usuarios where nomb_usuario='$usuario' and cont_usuario='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['rol_usuario'] == 'Customer') { //cliente
    header("location:../clientes.php");
} else
if ($filas['rol_usuario'] == 'Operator') { //operario
    header("location:../operarios.php");
} else 
    if ($filas['usuario'] == 'Admin') { //administrador
        header("location:../admin.php");
    } else {echo "<script>alert('" .'Invalid username or password' . "' );</script>";
       
?>
   
    <?php
    echo "<script>window.location = '/New_project/index.php';</script>";
    ?>

<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>





<?php
session_start(); 
error_reporting(0);
include("../Connection/conexion.php");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$SESSION['usuario']=$usuario; 



$consulta="SELECT*FROM usuarios where nom_usuario='$usuario' and cont_usuiario='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['rol_usuario'] == 'Customer') { //cliente
    header("location:../clientes.php");
} else
if ($filas['rol_usuario'] == 'Operator') { //operario
    header("location:../operarios.php");
} else 
    if ($filas['nom_usuario'] == 'Admin') { //administrador
        header("location:../admin.php");
    } else {echo "<script>alert('" .'Invalid username or password' . "' );</script>";
       
?>
   
    <?php
    echo "<script>window.location = '/New_project/index.php';</script>";
    ?>

  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);