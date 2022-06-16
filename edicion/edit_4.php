<?php
error_reporting(0);

    include("../Connection/conexion.php");

   $id = $_GET["id"];

   $mostrar = "select * from usuarios
                where nomb_usuario ='$id'";

   
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../repository/style.css">
    <link rel="stylesheet" href="../logical_folder/logic.js">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
</head>

<body>

    <!--contenedor del encabezado-->
    <header class="cont_head">
        <div class="cont_logo">
            <img src="../imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button title="Back">
                <a href="edit_usuario.php"><img src="../imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
           
        </header>
        <section class="contenedor">

        <?php
        $resultado = mysqli_query($conexion,$mostrar);
            while($fila = mysqli_fetch_array($resultado)) {
?> 
            
        <form action="../actualizar/act_usuario.php" method="POST"  class="form_registro-3">

            <label for="doc">ID User</label>
                <input name="doc" class="input_form" type="text"   value="<?php echo $fila["id_usuario"]?>" readonly>
            <label for="nomb">Name User</label>    
                <input name="nomb" class="input_form" type="text"  value="<?php echo $fila["nomb_usuario"]?>">
            <label for="pass">Password</label>
                <input name="pass" class="input_form" type="text"   value="<?php echo $fila["cont_usuiario"]?>">
            <label for="rol">Role</label>
                <input name="rol"  class="input_form" type="text"value="<?php echo $fila["rol_usuario"]?> "> 
                
                

            <div class="cont-btn">
                <button class="btn-style color-3" type="submit">Edit</button>
            </div>
        </form>
    
        <?php
} mysqli_free_result($resultado);
?>         
                 
</section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>
