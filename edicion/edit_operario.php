<?php
error_reporting(0);

    include("../Connection/conexion.php");
   
    $doc = $_POST['doc'];
$mostrar = "select id_operario, nomb_operario, apell_operario,  cargos.nomb_cargo
from operarios
inner join cargos
on operarios.idcargo_operario = cargos.id_cargo
where id_operario ='$doc'";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Operator</title>
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
                    <a href="../admin/admin_operadores.php"><img src="../imagenes/back.png" alt=""></a></button>
            </nav>
        </header>
<!--contenedor inicial--> 
<section class="cont_inicial2">
    <form method="POST" action="edit_operario.php" class="cont_menu" >
        <input name="doc" type="text" placeholder="New Search">
        <button class="btn_busq" ><img src="../imagenes/search (1).png" title="Search">
        </button>
        
        </form>
    <main class="cont-box">
        <header class="t_head">
            <button>Document</button>
            <button>Name</button>
            <button>Last Name</button>
            <button>Position</button>
            <button>Action</button>
        </header>
         <section class="cont-tabla">
           <table class="table-1">

<?php   
$resultado = mysqli_query($conexion, $mostrar); 

        while($row =mysqli_fetch_array($resultado))  { 

?>
                    <tr>
                        <td id="td" class="td-2"><?php echo $row["id_operario"] ?></td>
                        <td class="td-2"><?php echo $row["nomb_operario"] ?></td>
                        <td class="td-2"><?php echo $row["apell_operario"] ?></td>
                        <td class="td-2"><?php echo $row["nomb_cargo"] ?></td>
                        <td class="td-2">
                        <a href="edit_3.php? id=<?php echo $row["id_operario"]?>">Edit</a>
                        </td>
                    </tr> 
<?php   }   mysqli_free_result($resultado);
if(!$resultado ) {
    echo "<script>alert('" .'Actualizacion Exitosa' . "' );</script>";
};  
   ?> 


           </table>
         </section>
      </main>
</section>

        <script src="../logical_folder/logic.js"></script>
</body>
</html>