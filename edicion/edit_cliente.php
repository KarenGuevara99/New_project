<?php
error_reporting(0);

    include("../Connection/conexion.php");
   
    $doc = $_POST['doc'];
$mostrar = "select id_cliente, concat(nomb_cliente,' ',apell_cliente) as Nombre,
tel_cliente,correo_cliente,ciudad_cliente  from clientes
where id_cliente ='$doc'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer</title>
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
                    <a href="../admin/admin_clientes.php"><img src="../imagenes/back.png" alt=""></a></button>
            </nav>
        </header>
<!--contenedor inicial--> 
<section class="cont_inicial2">
    <form method="POST" action="edit_cliente.php" class="cont_menu">
        <input name="doc" type="text" placeholder="New Search">
        <button class="btn_busq"><img src="../imagenes/search (1).png" title="Search"></button>
        
        </form>
    <main class="cont-box">
        <header class="t_head">
            <button>Document</button>
            <button>Name</button>
            <button>Phone</button>
            <button>e-mail</button>
            <button>City</button>
            <button>Action</button>
        </header>
         <section class="cont-tabla">
           <table class="table-1">

<?php   
$resultado = mysqli_query($conexion, $mostrar);
        while($row =mysqli_fetch_array($resultado)){
?>
                    <tr>
                        <td class="td-1"><?php echo $row["id_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["Nombre"] ?></td>
                        <td class="td-1"><?php echo $row["tel_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["correo_cliente"] ?></td>
                        <td class="td-1"><?php echo $row["ciudad_cliente"] ?></td>
                        <td>
                        <a href="edit_2.php? id=<?php echo $row["id_cliente"]?>">Edit</a>
                        </td>
                    </tr> 
<?php   } mysqli_free_result($resultado);    ?> 


           </table>
         </section>
      </main>
</section>

        <script src="../logical_folder/logic.js"></script>
</body>
</html>