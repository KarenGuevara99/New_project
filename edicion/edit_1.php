
<!--editar vehiculos-->

<?php
error_reporting(0);

    include("../Connection/conexion.php");

   $id = $_GET["id"];   // id_vehiculo

   $mostrar = "select * from vehiculos
                where id_vehiculo ='$id'";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
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
                <a href="edit_vehiculo.php"><img src="../imagenes/back.png" alt=""></a></button>
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
            
        <form action="../actualizar/act_vehiculo.php" method="post"  class="form_registro-2">

            <label for="plate">Plate</label>
                <input name="Plate" class="input_form" type="text"      value="<?php echo $fila["id_vehiculo"]?>" readonly>
            <label for="Reference">Reference</label>    
                <input name="Reference" class="input_form" type="text"  value="<?php echo $fila["ref_vehiculo"]?>">
            <label for="Mark">Mark</label>
                <input name="Mark" class="input_form" type="text"       value="<?php echo $fila["marca_vehiculo"]?>">
            <label for="Model">PlateModel</label>
                <input name="Model" class="input_form" type="text"      value="<?php echo $fila["mod_vehiculo"]?>">
            <label for="Owner">Owner</label>
                <input name="Owner" class="input_form" type="text"      value="<?php echo $fila["idpro_vehiculo"]?>">
                    
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