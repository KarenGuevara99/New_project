<!--editar servicios-->

<?php
error_reporting(0);

    include("../Connection/conexion.php");

   $id = $_GET["id"];   // id_servicio

   $mostrar = "select * from servicios
                where id_servicio ='$id'";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
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
                <a href="../edicion/edit_servicio.php"><img src="../imagenes/back.png" alt=""></a></button>
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
            
        <form action="../actualizar/act_servicio.php" method="POST"  class="form_registro-2">

            <label for="idserv">ID Service</label>
                <input name="idserv" class="input_form" type="text"    value="<?php echo $fila["id_servicio"]?>" readonly>
            <label for="nombserv">Name Service</label>    
                <input name="nombserv" class="input_form" type="text"  value="<?php echo $fila["nomb_servicio"]?>">
                    
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