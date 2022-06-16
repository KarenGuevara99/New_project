<?php
error_reporting(0);

    include("Connection/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicle History Administration</title>
    <link rel="stylesheet" href="./repository/style.css">
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">Vehicle History Administration</p>
            <nav>
                 <a href="#somos-proya">Inicio</a>
                <a href="#somos-proya">Quienes Somos</a>
                <a href="#nuestros-programas">Nuestros Servicios</a>
                <a href="#caracteristicas">Contáctanos</a>
            </nav>
        </div>
    </header>

    <section id="hero"> 

        <h1>Vehicle History  <br>Administration</h1>
         <a href="loggin.php"><input type ="button">Iniciar Sesión></a>  


    </section>

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>¿Quiénes <span class="color-acento">Somos?</span></h2>
                <p>Somos una empresa que presta servicios de venta y cambio de aceite, filtros, valvulinas a motores diésel y gasolina del sector automotriz. Nuestros servicios son reconocidos a nivel nacional por la excelente calidad en los productos y en el servicio que prestamos, atendemos nuestra clientela con responsabilidad, seriedad y en el menor tiempo posible.También cuentan con el equipo necesario para el manejo de desechos (aceite, filtros, grasas etc). Todos los productos de desecho generados en los servicios de lubricación y filtrado considerados como contaminantes, tóxicos o de riesgo son reciclados o confinados a través de compañías especializadas y autorizadas por las autoridades ambientales para su disposición final.</p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Lubricación Vehicular</h3>
                    <p>Ofrecemos una gran variedad de lubricantes para motores de trabajo pesado, 100% originales, certificados y aprobados por la industria y los fabricantes de las mejores marcas internacionales de vehículos.
                    </p>
                   
                </div>
                <div class="carta">
                    <h3>Mantenimiento de frenos y suspensión</h3>
                    <p>Mantenimiento preventivo y correctivo al sistema de frenos y suspensión.Repuestos y partes originales. Pastillas
                    Bandas
                    Bloques
                    Pulmón de freno
                    Mangueras y lineas de conexión
                    Muelles y hojas
                    Amortiguadores
                    Suspensión neumática
                </p>
                    
                </div>
                <div class="carta">
                    <h3>Limpieza de tanques</h3>
                    <p>Nuestro servicio consiste en un sistema de limpieza de tanques de tres etapas; Reacondicionar, Estabilizar y Descontaminar el combustible diesel o gasolina.Sin desmontar el tanque eliminamos eficientemente el agua, lodos y sedimentos que se acumulan de forma natural en los tanques.
                    </p>
                    
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <h1>Contáctanos</h1>
            </ul>
        </div>
    </section>

 

    <footer>
        <div class="container">
            <p>&copy;Vehicle History Administration </p>
        </div>
    </footer> 
      <script src="./logical_folder/logic.js"></script>
</body>
</html>