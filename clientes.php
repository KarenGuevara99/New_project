<?php
error_reporting(0);

    include("Connection/conexion.php");

    $placa = $_POST['placa'];
    $consulta = "select vehiculos.id_vehiculo, servicios_detalle.fecha_detalle, 
    servicios.nomb_servicio, servicios_detalle.observ_detalle, 
    servicios_detalle.kilo_detalle
    from vehiculos
    inner join servicios_detalle
    on vehiculos.id_vehiculo = servicios_detalle.idvehi_detalle
    inner join servicios
    on servicios_detalle.idservicio_detalle = 
    servicios.id_servicio where id_vehiculo = '$placa'
    order by fecha_detalle desc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="./repository/style.css">
    <link rel="stylesheet" href="./logical_folder/logic.js">
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="cont_head">
        <div class="cont_logo">
            <img src="./imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button onclick="ab_login()">
                <a href="index.php"><img src="./imagenes/home (2).png" title="Home"></a>
            </button>
        </nav>
    </header>
    <section class="cont_inicial2">
            <form method="POST" action="clientes.php" class="cont_menu"> 
                <input name="placa" type="text" placeholder="New Search">
                <button class="btn_busq" onclick="location.reload()"><img src="./imagenes/search (1).png" title="Search">
            </button>
            </form>
            <main class="cont-box">
                <header class="t_head">
                  <button>Date</button>
                  <button>Plate</button>
                  <button>Service</button>
                  <button>Detail</button>
                  <button>kilometres</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $consulta);
        while($row =mysqli_fetch_array($resultado)){
?>
                     <tr>
                        <td><?php echo $row["fecha_detalle"] ?></td>
                        <td><?php echo $row["id_vehiculo"] ?></td>
                        <td><?php echo $row["nomb_servicio"] ?></td>
                        <td><?php echo $row["observ_detalle"] ?></td>
                        <td><?php echo $row["kilo_detalle"] ?></td>    
                     </tr>
<?php   } mysqli_free_result($resultado);    ?> 
                   </table>
                 </section>
              </main>
    </section>

    <script src="./logical_folder/logic.js"></script>
</body>
</html>