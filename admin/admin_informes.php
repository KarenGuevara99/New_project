<?php
error_reporting(0);

    include("../Connection/conexion.php");
   
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Reports</title>
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
                <a href="../admin.php"><img src="../imagenes/back.png" alt=""></a>
            </button>
        </nav>
    </header>

    <!--contenedor inicial-->
    <section class="cont_inicial2">
        <header class="cont_menu2">
            <button class="btn-refresh" onclick="location.reload()" title="Reload">
                <img class="img-btn-2" src="../Imagenes/refresh.png" alt="" >
            </button>
        </header>

        <fieldset>
            <legend>Owners by Vehicles</legend>
            <form method="POST" action="../informes/informe_1.php" class="cont-form-pdf"> 
                <input name="clienteinfo" id="clienteinfo" type="text" placeholder="Owner Document" class="input_form" required> 
                <button type="submit" class="btn-style-2 color-2">Create PDF</button> 
            </form>
        </fieldset> 

        <fieldset>
            <legend>Vehicles by Services</legend>
            <form method="POST" action="../informes/informe_2.php" class="cont-form-pdf"> 
                <input name="vehicleinfo" id="vehicleinfo" type="text" placeholder="Vehicle Plate" class="input_form" required> 
                <button type="submit" class="btn-style-2 color-2">Create PDF</button> 
            </form>
        </fieldset>

        <fieldset>
            <legend>Operators by Services Performed</legend>
            <form method="POST" action="../informes/informe_3.php" class="cont-form-pdf"> 
                <input name="operarioinfo" id="operarioinfo" type="text" placeholder="Operator Document" class="input_form" required> 
                <button type="submit" class="btn-style-2 color-2">Create PDF</button> 
            </form>
        </fieldset> 

        <fieldset>
            <legend>Operations by Date</legend>
            <form method="POST" action="../informes/informe_4.php" class="cont-form-pdf"> 
                <input name="fechainfo" id="cfechainfo" type="date" placeholder="Owner Document" class="input_form" required> 
                <button type="submit" class="btn-style-2 color-2">Create PDF</button> 
            </form>
        </fieldset>  

    </section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>