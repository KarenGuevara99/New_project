<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Reports</title>
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
            <button>
                <a href="admin.php"><img src="./imagenes/back.png" alt=""></a>
            </button>
        </nav>
    </header>

    <!--contenedor inicial-->
    <section class="cont_inicial2">
        <header class="cont_menu2">
        <div class="menu">
                <button class="btn_menu"><img src="./Imagenes/menu.png" alt=""></button>
                <div class="cont_btns">
                    <button><a href="info_clientes_vehi.php">
                        <img class="img_btn" src="./Imagenes/usuarios.png" alt="">Owners by Vehicles</a>
                    </button>
                    <button><a href="">
                        <img class="img_btn" src="./Imagenes/favicon.ico" alt="">Vehicles by Services</a>
                    </button>
                    <button><a href="">
                        <img class="img_btn" src="./Imagenes/operator.png" alt="">Services by Performed</a>
                    </button>
                    <button><a href="">
                        <img class="img_btn" src="./Imagenes/date.png" alt="">Operations by Date</a>
                    </button>
                </div>
            </div>
        </header>
           
    </section>
    <script src="./logical_folder/logic.js"></script>
</body>

</html>