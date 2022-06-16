<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
            <button title="Home">
                <a href="index.php"><img src="./imagenes/home (2).png" alt=""></a></button>
        </nav>
    </header>

    <!--contenedor inicial-->
    <section class="cont_inicial2">
        <header class="cont_menu2">
            <div class="menu">
                <button class="btn_menu"><img src="./Imagenes/menu.png" alt=""></button>
                <div class="cont_btns">
                    <button><a href="./admin/admin_vehiculos.php">
                        <img class="img_btn" src="./imagenes/favicon.ico" alt="">Admin. Vehicles</a></button>
                    <button><a href="./admin/admin_clientes.php">
                        <img class="img_btn" src="./imagenes/user_1.png" alt="">Admin. Customers</a></button>
                    <button><a href="./admin/admin_operadores.php">
                        <img class="img_btn" src="./imagenes/operator.png" alt="">Admin. Operators</a></button>
                    <button><a href="./admin/admin_servicios.php">
                        <img class="img_btn" src="./imagenes/servicios.png" alt="">Admin. Services</a></button>
                    <button><a href="./n_servicio/n_servicio_admin.php">
                            <img class="img_btn" src="./imagenes/add.png" alt="">New Service</a></button>
                    <button><a href="./admin/admin_usuarios.php">
                            <img class="img_btn" src="./imagenes/user.png" alt="">Admin. Users</a></button>
                    <button><a href="./admin/admin_informes.php">
                            <img class="img_btn" src="./imagenes/pdf.png" alt="">Create Reports</a></button>
                </div>
            </div>
            
        </header>
    </section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>