<?php
error_reporting(0);

    include("../Connection/conexion.php");

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
order by fecha_detalle desc";

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Service</title>
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
            <button>
                <a href="../admin.php"><img src="../imagenes/back.png" title="Home"></a>
            </button>
        </nav>
    </header>
    <section class="cont_inicial2">
            <header class="cont_menu-2">
                <button class="btn-menu-2"><a href="../admin/admin_clientes.php">
                    <img class="img_btn" src="../imagenes/user (2).png" alt="">Admin. Customers</a>
                </button>
                <button class="btn-menu-2"><a href="../admin/admin_vehiculos.php">
                    <img class="img_btn" src="../imagenes/favicon.ico" alt="">Admin. Vehicles</a>
                </button>
                <button class="btn-menu-2"><a href="../admin/admin_operadores.php">
                    <img class="img_btn" src="../imagenes/operator.png" alt="">Admin. Operators</a>
                </button>
                <button class="btn-menu-2"><a href="../admin/admin_servicios.php">
                    <img class="img_btn" src="../imagenes/servicios.png" alt="">Admin. Services</a>
                </button>
            </header>
            <section class="contenedor">

            
                   <form action="../registrar/registrar_7.php" method="post" 
                        class="form_registro">
                     
                        <input name="Fecha" class="input_form" value="<?php echo date("Y-m-d");?>" readonly id='fservicio' >
                        <input name="Placa" class="input_form" type="text" placeholder="Plate" required>
                        <input name="Prop" class="input_form" type="text" placeholder="Owner" required>
                        <input name="Numero" class="input_form" type="number" placeholder="Nº Service" required>
                        <textarea name="Detalle" class="input_form"   cols="37" rows="5" placeholder="Detail" required></textarea>
                        <input name="Operario" class="input_form" type="text" placeholder="ID Operator" required>
                        <input name="kilo" class="input_form" type="text" placeholder="Kilometer" required>
                    <div class="cont-btn">
                            <button class="btn-style color-1" type="submit">Record</button>
                    </div>
                   </form>
                   <main class="cont-box-n">
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
    </section>

    <script src="../logical_folder/logic.js"></script>
    <script>
/*document.getElementById("fservicio").innerHTML = Date();*/
</script>
</body>
</html>