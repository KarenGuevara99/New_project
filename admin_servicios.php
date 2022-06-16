<?php
error_reporting(0);

    include("Connection/conexion.php");

    $servicio = "select * from servicios";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Operators</title>
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
                        <button class="btn-menu-2"><a href="n_servicio_admin.php">
                            <img class="img_btn" src="./Imagenes/add.png" alt="">New Service</a>
                        </button>
            
        </header>
        <section class="contenedor">
            
               <form action="Connection/registrar_5.php" method="post"  class="form_registro">
                    <input name="Nservicio" class="input_form-serv" type="text" placeholder="New Service" required>
                    
                    <div class="cont-btn-serv">
                        <button class="btn-style color-1" type="submit">Record</button>
                        <button class="btn-style color-3" disabled>Edit</button>
                        <button class="btn-style color-2" disabled>Delete</button>
                    </div>
                   
               </form>
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-2">ID Service</button>
                  <button class="btn-2">Name Service</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $servicio);
        while($row =mysqli_fetch_array($resultado)){
?>
                   <tr>
                        <td class="td-1"><?php echo $row["id_servicio"] ?></td>
                        <td class="td-1"><?php echo $row["nomb_servicio"] ?></td>
                        
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