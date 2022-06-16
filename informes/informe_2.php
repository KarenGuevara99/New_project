<?php
require('../lib_pdf\fpdf.php');
require ('../Connection\conexion.php');

$placaVehiculo = $_POST['vehicleinfo'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../imagenes\logo.png',10,5,15);
    // Arial bold 15
    $this->SetFont('Arial','B',19);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(10,5,'Vehicle History Administration',0,0,'C');
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(30,10,'Vehicles by Services',0,0,'l');
    $this->SetFont('Arial','',9);
    $this->Cell(160,10,date('Y-m-d'),0,0,'R');
    $this->Ln(20); 
    
}

// Pie de página
function Footer()
{
    $this->SetTextColor(0,0,0);
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$mostrar = "select *, concat(clientes.nomb_cliente,' ',clientes.apell_cliente) as Nombre 
from vehiculos
inner join clientes
on vehiculos.idpro_vehiculo = clientes.id_cliente
where id_vehiculo = '$placaVehiculo'";

$mServicio = "select servicios_detalle.fecha_detalle, servicios.nomb_servicio,servicios_detalle.observ_detalle,
servicios_detalle.kilo_detalle
from servicios_detalle
inner join servicios
on servicios_detalle.idservicio_detalle = servicios.id_servicio
where idvehi_detalle = '$placaVehiculo'
order by fecha_detalle desc";

$resultado = $conexion->query($mostrar);


$pdf = new PDF('P','mm','letter' );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){  

    $pdf->Cell(30,10,'Plate:',0,0,'l');
    $pdf->cell(80, 10, $row["id_vehiculo"], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Reference:',0,0,'l');
    $pdf->cell(80, 10, $row['ref_vehiculo'], 0, 0, 'L', 0 );
    $pdf->Ln(5);

    $pdf->Cell(30,10,'Mark:',0,0,'l');
    $pdf->cell(80, 10, $row['marca_vehiculo'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Model:',0,0,'l');
    $pdf->cell(80, 10, $row['mod_vehiculo'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Owner:',0,0,'l');
    $pdf->cell(80, 10, $row['Nombre'], 0, 0, 'L', 0 );
    $pdf->Ln(20);
}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($mServicio);
$pdf->Line(15, 90, 200, 90); 
$pdf->Line(15, 100, 200, 100); 
$pdf->Cell(35,10,'Date',0,0,'C');
$pdf->Cell(35,10,'Kilometer',0,0,'C');
$pdf->Cell(55,10,'Type Service',0,0,'C');
$pdf->Cell(60,10,'Detail',0,0,'C');
$pdf->Ln(15); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);
   

$pdf->cell(35, 10, $row["fecha_detalle"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["kilo_detalle"], 0, 0, 'C', 0 );
$pdf->cell(55, 10, $row["nomb_servicio"], 0, 0, 'C', 0 );
$pdf->Multicell(60,6, $row["observ_detalle"],0,'J'); 
$pdf->Ln(5);

}
$pdf->Output();

?>