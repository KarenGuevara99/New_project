<?php
error_reporting(0);

    include("Connection/conexion.php");

    $operadores = "select operarios.id_operario, concat( operarios.nomb_operario,' ', operarios.apell_operario)
    as NombreOp, cargos.nomb_cargo 
    from operarios
    inner join cargos
    on operarios.idcargo_operario = cargos.id_cargo";
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
        <header class="cont_menu">
            
        </header>
        <section class="contenedor">
            
               <form action="Connection/registrar_4.php" method="post"  class="form_registro">
                    <input name="Documentop" class="input_form" type="text" placeholder="Document" required>
                    <input name="Nameop" class="input_form" type="text" placeholder="Name" required>
                    <input name="Lastnameop" class="input_form" type="text" placeholder="Last name" required>
                    <select name="Positionop" class="input_form"  required>
                            <option selected disabled>Position</option>
                            <option value="1">Lubricator Operator</option>   *
                            <option value="2">Warehouse Assistant</option>  *
                            <option value="3">Warehouse Manager</option> *
                            <option value="4">Billing assistant</option>   *
                            <option value="5">Administrative Assistant</option>  *
                            <option value="6">Administrative boss</option> *
                    </select>        
                    <div class="cont-btn-serv">
                        <button class="btn-style color-1" type="submit">Record</button>
                        <button class="btn-style color-3" disabled>Edit</button>
                        <button class="btn-style color-2" disabled>Delete</button>
                    </div>
                   
               </form>
               <main class="cont-box-n">
                <header class="t_head">
                  <button class="btn-3">Document</button>
                  <button class="btn-3">Name Operator</button>
                  <button class="btn-3">Position</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $operadores);
        while($row =mysqli_fetch_array($resultado)){
?>
                   <tr>
                        <td class="td-1"><?php echo $row["id_operario"] ?></td>
                        <td class="td-1"><?php echo $row["NombreOp"] ?></td>
                        <td class="td-1"><?php echo $row["nomb_cargo"] ?></td>
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