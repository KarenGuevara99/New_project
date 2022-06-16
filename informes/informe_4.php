<?php
require('../lib_pdf\fpdf.php');
require '../Connection\conexion.php';

$dateinfo = $_POST['fechainfo'];


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
    $this->Cell(30,10,'Operations by Date',0,0,'l');
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,1,'C');
}
}

$mostrar = "select fecha_detalle from servicios_detalle
where fecha_detalle = '$dateinfo'
group by fecha_detalle";

$mOperacion = "select fecha_detalle, count(fecha_detalle) as 'Cantidad' 
from servicios_detalle
where fecha_detalle = '$dateinfo'
group by fecha_detalle";
//between '2022-05-10' and '2022-05-16'";

$cantvehimarca = "select servicios_detalle.fecha_detalle, vehiculos.marca_vehiculo as Mark, 
count(vehiculos.marca_vehiculo) as Quantity
from servicios_detalle
inner join vehiculos
on servicios_detalle.idvehi_detalle = vehiculos.id_vehiculo 
where fecha_detalle = '$dateinfo'
group by marca_vehiculo ;";

$cantypeserv = "select fecha_detalle, idservicio_detalle, servicios.nomb_servicio, count(servicios.nomb_servicio) as Quantity
from servicios_detalle
inner join servicios
on servicios_detalle.idservicio_detalle = servicios.id_servicio 
where fecha_detalle = '$dateinfo'
group by id_servicio;";


$resultado = $conexion->query($mostrar);


$pdf = new PDF('P','mm','letter' );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){  

    $pdf->Cell(55,10,'Report of operations of the date:',0,0,'l');
    $pdf->SetTextColor(0,50,250);
    $pdf->cell(0, 10, $row["fecha_detalle"], 0, 0, 'L', 0 );
    $pdf->Ln(20); 

}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($mOperacion);
$pdf->Line(10, 80, 200, 80);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(45,10,'Number of Services',0,0,'C');
$pdf->Cell(35,10,'Date',0,0,'C');
$pdf->Ln(10); 

while($row = $result->fetch_assoc()){ 

    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);
   

$pdf->cell(45, 10, $row["Cantidad"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["fecha_detalle"], 0, 0, 'C', 0 );
$pdf->Ln(15);

}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($cantvehimarca);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(45,20,'Quantity',0,0,'C');
$pdf->Cell(35,20,'Mark',0,0,'C');
$pdf->Ln(10); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);
   

$pdf->cell(45, 20, $row["Quantity"], 0, 0, 'C', 0 );
$pdf->cell(35, 20, $row["Mark"], 0, 0, 'C', 0 );
$pdf->Ln(10);

}

$pdf->SetFont('Arial','B',11);
$result = $conexion->query($cantypeserv);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(45,30,'Quantity',0,0,'C');
$pdf->Cell(35,30,'Type Service',0,0,'C');
$pdf->Ln(10); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);
   

$pdf->cell(45, 30, $row["Quantity"], 0, 0, 'C', 0 );
$pdf->cell(35, 30, utf8_decode($row["nomb_servicio"]), 0, 0, 'C', 0 );
$pdf->Ln(10); 
}

$pdf->Output();

?>