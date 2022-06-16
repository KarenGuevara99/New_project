<?php
error_reporting(0);

    include("../Connection/conexion.php");

   $vehiculo = "select * from vehiculos
   group by id_vehiculo
   order by id_vehiculo asc
  ";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Vehicle</title>
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
                <a href="../admin.php"><img src="../imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
            <button class="btn-menu-2"><a href="../edicion/edit_vehiculo.php">
                        <img class="img_btn" src="../imagenes/edit.png" alt="">Edit Vehicle</a>
            </button>
        </header>
        <section class="contenedor">
            
               <form action="../registrar/registrar_2.php" method="post"  class="form_registro" required>
                    <input name="Plate" class="input_form" type="text" placeholder="Plate" required >
                    <input name="Reference" class="input_form" type="text" placeholder="Reference" required>
                    <input name="Mark" class="input_form" type="text" placeholder="Mark" required>
                    <input name="Model" class="input_form" type="text" placeholder="Model" required>
                    <input name="Owner" class="input_form" type="text" placeholder="ID Owner" required>
                    <div class="cont-btn">
                        <button class="btn-style color-1" type="submit">Record</button>
                    </div>
               </form>
    
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-1">Plate</button>
                  <button class="btn-1">Reference</button>
                  <button class="btn-1">Mark</button>
                  <button class="btn-1">Model</button>
                  <button class="btn-1">ID Owner</button>
                </header>
                 <section class="cont-tabla">
                  
<?php  
$resultado = mysqli_query($conexion, $vehiculo);
        while($row =mysqli_fetch_array($resultado)){
?> <table class="table-1">
                   <tr>
                        <td class="td-1"><?php echo $row["id_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["ref_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["marca_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["mod_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["idpro_vehiculo"] ?></td>
                    </tr> 
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
            
            </section>   
</section>
    <script src="../logical_folder/logic.js"></script>
</body>

</html>