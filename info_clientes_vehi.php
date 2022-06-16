<?php
error_reporting(0);

    include("Connection/conexion.php");

    $clienteinfo = $_POST['clienteinfo'];

    $infocliente = "select * from clientes where id_cliente = '$clienteinfo'";

    $infovehiculo = "select * from vehiculos
                    where idpro_vehiculo = '$clienteinfo' 
                    order by mod_vehiculo  desc";
   
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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
        
        <form method="POST" action="" class="cont_menu"> 
            <input name="clienteinfo" type="text" placeholder="Owner Document">
                <button class="btn_busq" onclick="location.reload()">
                    <img src="./imagenes/search (1).png" title="Search">
                </button>  
                <button class="btn_busq-2" title="Generate PDF Document" onclick=" ab_info_1()"><a>
                    <img src="./imagenes/folder.png">
                    </a></button>              
        </form>
        <section class="cont-work">
<div class="cont-dinfo">
               
<?php
    $resultado = mysqli_query($conexion,$infocliente);
        while($row =mysqli_fetch_array($resultado)){
?>
    <fieldset>
        <legend>Owner Information</legend>
                <p class="titulo">Document:</p>
                <p class="info"><?php echo $row["id_cliente"] ?></p>
                <p class="titulo">Names:</p>
                <p class="info"><?php echo $row["nomb_cliente"] ?></p>
                <p class="titulo">Last names:</p>
                <p class="info"><?php echo $row["apell_cliente"] ?></p>
                <p class="titulo">Phone:</p>
                <p class="info"><?php echo $row["tel_cliente"] ?></p>
                <p class="titulo">E-mail:</p>
                <p class="info"><?php echo $row["correo_cliente"] ?></p>
                <p class="titulo">City:</p>
                <p class="info"><?php echo $row["ciudad_cliente"] ?></p>
    </fieldset>
</div>
<?php   } mysqli_free_result($resultado);    ?>                 
                
    <div class="cont-dvehiculo">
    <table class="table-1">
<?php  
$result = mysqli_query($conexion, $infovehiculo);
        while($row =mysqli_fetch_array($result)){
?>                 
                    
                   <tr>
                        <td class="td-1"><?php echo $row["id_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["ref_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["marca_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["mod_vehiculo"] ?></td>
                    </tr> 
<?php   } mysqli_free_result($result);    ?> 
                   </table>                  
    </div> 
    
</section>






    </section>
    <script src="./logical_folder/logic.js"></script>
</body>

</html>