<?php
error_reporting(0);

    include("../Connection/conexion.php");

   $id = $_GET["id"];

   $mostrar = "select * from clientes
                where id_cliente ='$id'";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
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
                <a href="../edicion/edit_cliente.php"><img src="../imagenes/back.png" alt=""></a></button>
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
            
        <form action="../actualizar/act_cliente.php" method="post"  class="form_registro-3">

            <label for="doc">Document</label>
                <input name="doc" class="input_form" type="text"      value="<?php echo $fila["id_cliente"]?>" readonly>
            <label for="nomb">Name</label>    
                <input name="nomb" class="input_form" type="text"  value="<?php echo $fila["nomb_cliente"]?>">
            <label for="ape">Last Name</label>
                <input name="ape" class="input_form" type="text"       value="<?php echo $fila["apell_cliente"]?>">
            <label for="tel">Phone</label>
                <input name="tel" class="input_form" type="text"      value="<?php echo $fila["tel_cliente"]?>">
            <label for="correo">E-mail</label>
                <input name="correo" class="input_form" type="text"      value="<?php echo $fila["correo_cliente"]?>">
            <label for="ciudad">City</label>
                <input name="ciudad" class="input_form" type="text"      value="<?php echo $fila["ciudad_cliente"]?>">
                    
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