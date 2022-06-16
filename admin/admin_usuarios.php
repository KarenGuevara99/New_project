<?php
error_reporting(0);

    include("../Connection/conexion.php");

    $usuarios = "select * from usuarios";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin. Users</title>
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
            <button>
                <a href="../admin.php"><img src="../imagenes/back.png" alt=""></a></button>
        </nav>
    </header>
    <section class="cont_inicial2">
        <header class="cont_menu-2">
        <button class="btn-menu-2"><a href="../edicion/edit_usuario.php">
                        <img class="img_btn" src="../imagenes/edit.png">Edit Users</a>
                    </button>
        </header>
        <section class="contenedor">
            
               <form action="../registrar/registrar_6.php" method="post"  class="form_registro">
                    <input name="nombuser" class="input_form" type="text" placeholder="Name User" required>
                    <input name="contuser" class="input_form" type="text" placeholder="Password" required>
                    <select name="roluser" class="input_form"  required>
                            <option selected disabled>Role User</option>
                            <option value="Customer">Customer</option>   *
                            <option value="Operator">Operator</option>  *
                            <option value="Admin">Admin</option> *
                    </select>        
                    <div class="cont-btn-serv">
                        <button class="btn-style color-1" type="submit">Record</button>
                    </div>
                   
               </form>
               <main class="cont-box-n">
                <header class="t_head">
                    <button class="btn-3">ID User</button>
                    <button class="btn-3">Name User</button>
                    <button class="btn-3">Password User</button>
                    <button class="btn-3">Role User</button>
                </header>
                 <section class="cont-tabla">
                   <table class="table-1">
<?php  
$resultado = mysqli_query($conexion, $usuarios);
        while($row =mysqli_fetch_array($resultado)){
?>
                   <tr>
                        <td class="td-1"><?php echo $row["id_usuario"] ?></td>
                        <td class="td-1"><?php echo $row["nomb_usuario"] ?></td>
                        <td class="td-1"><?php echo $row["cont_usuiario"] ?></td>
                        <td class="td-1"><?php echo $row["rol_usuario"] ?></td>
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