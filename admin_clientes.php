<?php
error_reporting(0);

    include("Connection/conexion.php");

    $clientes = "select id_cliente, concat(nomb_cliente,' ',apell_cliente) as Nombre, 
    tel_cliente,correo_cliente,ciudad_cliente
    from clientes
    order by ciudad_cliente;";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Customers</title>
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
                <a href="admin.php"><img src="./imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
                    <button class="btn-menu-2"><a href="admin_vehiculos.php">
                        <img class="img_btn" src="./Imagenes/favicon.ico" alt="">Admin. Vehicles</a>
                    </button>
                    <button class="btn-menu-2"><a href="n_servicio_admin.php">
                        <img class="img_btn" src="./Imagenes/add.png" alt="">New Service</a>
                    </button>
        </header>
        <section class="contenedor">
            
               <form action="Connection/registrar_3.php" method="post"  class="form_registro">
                    <input name="Document" class="input_form" type="text" placeholder="Document" required>
                    <input name="Name" class="input_form" type="text" placeholder="Name" required>
                    <input name="Lastname" class="input_form" type="text" placeholder="Last name" required>
                    <input name="Phone" class="input_form" type="text" placeholder="Phone"  required>
                    <input name="mail" class="input_form" type="text" placeholder="E-mail"  required>
                        <select name="City" id="" class="input_form"  required>
                            <option selected disabled>City</option>
                            <option value="Arauca">Arauca</option>   *
                            <option value="Armenia">Armenia</option>  *
                            <option value="Barranquilla">Barranquilla</option> *
                            <option value="Bogot??">Bogot??</option>   *
                            <option value="Bucaramanga">Bucaramanga</option>  *
                            <option value="Cali">Cali</option> *
                            <option value="Cartagena de Indias">Cartagena de Indias</option>  *
                            <option value="C??cuta">C??cuta</option>   *
                            <option value="Florencia">Florencia</option>    *
                            <option value="Ibague">Ibague</option>  *
                            <option value="leticia">leticia</option> *
                            <option value="Manizales">Manizales</option>   *
                            <option value="Medell??n">Medell??n</option>    *
                            <option value="Mit??">Mit??</option>    *
                            <option value="Mocoa">Mocoa</option>   *
                            <option value="Monter??a">Monter??a</option>    *
                            <option value="Neiva">Neiva</option>   *
                            <option value="Pasto">Pasto</option>   *
                            <option value="Pereira">Pereira</option> *
                            <option value="Popay??n">Popay??n</option> *
                            <option value="Puerto Carre??o">Puerto Carre??o</option>  *
                            <option value="Puerto In??rida">Puerto In??rida</option>  *
                            <option value="Quibd??">Quibd??</option>  *
                            <option value="Riohacha">Riohacha</option>    *
                            <option value="San Andr??s">San Andr??s</option>  *
                            <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>   *
                            <option value="Santa Marta">Santa Marta</option> *
                            <option value="Sincelejo">Sincelejo</option>   *
                            <option value="Tunja">Tunja</option>   *
                            <option value="Valledupa">Valledupar</option>  *
                            <option value="Villavicencio">Villavicencio</option>   *
                            <option value="Yopal">Yopal</option>   *
                            
                        </select>
                    <div class="cont-btn">
                        <button class="btn-style color-1" type="submit">Record</button>
                        <button class="btn-style color-3" disabled>Edit</button>
                        <button class="btn-style color-2" disabled>Delete</button>
                    </div>
                   
               </form>
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-1">Document</button>
                  <button class="btn-1">Name</button>
                  <button class="btn-1">Phone</button>
                  <button class="btn-1">E-mail</button>
                  <button class="btn-1">City</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $clientes);
        while($row =mysqli_fetch_array($resultado)){
?>
                   <tr>
                        <td class="td-1"><?php echo $row["id_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["Nombre"] ?></td>
                        <td class="td-1"><?php echo $row["tel_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["correo_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["ciudad_cliente"] ?></td>
                    </tr> 
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
            
            </section>   
</section>
    <script src="./logical_folder/logic.js"></script>
</body>

</html>