<?php
    include("Connection/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="./repository/style.css">
    <link rel="stylesheet" href="./logical_folder/logic.js">
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">
</head>
<body>

<!--contenedor del encabezado-->    
        <header class="cont_head">
            <div class="cont_logo">
                <img src="./imagenes/logo.png" alt="">
            </div>
            <div class="cont_titulo">
                <h1>Vehicle History Administration</h1>
            </div>
            <nav class="cont_login">
                <button onclick="ab_login()">
                    <a href="index.php"><img src="./imagenes/home (2).png" alt=""></a></button>
            </nav>
        </header>
<!--contenedor inicial--> 
        <section class="cont_inicial2">
            <header class="cont_menu2">
                <div class="menu">
                    <button class="btn_menu"><img src="./Imagenes/menu.png" alt=""></button>
               
        <!--contenedor botones menu-->             
                    <div class="cont_btns">
                        <button><a href="./buscar/b_clientes.php">
                            <img class="img_btn" src="./Imagenes/user (2).png" alt="">Customer</a></button>
                        <button><a href="./buscar/b_servicio.php">
                            <img class="img_btn" src="./Imagenes/search.png" alt="">Vehicle History</a></button>
                        <button><a href="./n_servicio/n_servicio.php">
                            <img class="img_btn" src="./Imagenes/add.png" alt="">New Service</a></button>
                    </div>
                </div> 
                </header> 
        </section>
        <script src="./logical_folder/logic.js"></script>
</body>
</html>