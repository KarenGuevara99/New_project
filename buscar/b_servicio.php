
<?php
error_reporting(0);

    include("../Connection/conexion.php");
    
    $buscar = $_POST['buscar'];  
$mosplaca = "select vehiculos.id_vehiculo, servicios_detalle.fecha_detalle, 
servicios.nomb_servicio, servicios_detalle.observ_detalle, 
servicios_detalle.kilo_detalle,
concat(nomb_operario,' ',apell_operario) as Operario
from vehiculos
inner join servicios_detalle
on vehiculos.id_vehiculo = servicios_detalle.idvehi_detalle
inner join servicios
on servicios_detalle.idservicio_detalle = servicios.id_servicio
inner join operarios
on servicios_detalle.idope_detalle = operarios.id_operario
where vehiculos.id_vehiculo = '$buscar'
order by fecha_detalle desc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Service</title>
    <link rel="stylesheet" href="../repository/style.css">
    <link rel="stylesheet" href="../logical_folder/logic.js">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="cont_head">
        <div class="cont_logo">
            <img src="../imagenes/logo.png" alt="">
        </div>
        <div class="cont_titulo">
            <h1>Vehicle History Administration</h1>
        </div>
        <nav class="cont_login">
            <button onclick="ab_login()">
                <a href="../operarios.php"><img src="../imagenes/back.png" title="Home"></a>
            </button>
        </nav>
    </header>
    <section class="cont_inicial2">
    <form method="POST" action="b_servicio.php" class="cont_menu">
        <input name="buscar" type="text" placeholder="New Search">
        <button class="btn_busq" type="submit"><img src="../imagenes/search (1).png" title="Search"></button>
        
        </form>
            <main class="cont-box">
                <header class="t_head">
                  <button class="btn-1">Date</button>
                  <button class="btn-1">Plate</button>
                  <button class="btn-1">Service</button>
                  <button class="btn-1">Detail</button>
                  <button class="btn-1">kilometres</button>
                  <button class="btn-1">Operator</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php   
$resultado = mysqli_query($conexion, $mosplaca);
        while($row =mysqli_fetch_array($resultado)){
?>
                     <tr>
                        <td class="td-1"><?php echo $row["fecha_detalle"] ?></td>
                        <td class="td-1"><?php echo $row["id_vehiculo"] ?></td>
                        <td class="td-1"><?php echo $row["nomb_servicio"] ?></td>
                        <td class="td-1"><?php echo $row["observ_detalle"] ?></td>
                        <td class="td-1"><?php echo $row["kilo_detalle"] ?></td>  
                        <td class="td-1"><?php echo $row["Operario"] ?></td>    
                     </tr>
<?php   } mysqli_free_result($resultado); ?>

                   





                   </table>
                 </section>
              </main>
    </section>

    <script src="../logical_folder/logic.js"></script>
</body>
</html>