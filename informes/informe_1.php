<?php

include ('../Connection/conexion.php');
require ('../lib_pdf\fpdf.php');

$docCliente = $_POST['clienteinfo'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../imagenes\logo.png',10,5,15);
    // Arial bold 15
    $this->SetFont('Arial','B',19);
    // Margen izquierda
    $this->Cell(60);
    // Título
    $this->Cell(10,5,'Vehicle History Administration',0,0,'C');
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(30,10,'Owners by Vehicles',0,0,'l');
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

$mostrar = "select id_cliente, concat(nomb_cliente,' ',apell_cliente) as Nombre,
tel_cliente,correo_cliente,ciudad_cliente 
from clientes
where id_cliente = '$docCliente'";

$mVehiculo = "select id_vehiculo, ref_vehiculo, marca_vehiculo, mod_vehiculo
    from vehiculos
    where idpro_vehiculo = '$docCliente'";

$resultado = $conexion->query($mostrar);


$pdf = new PDF('P','mm','letter' );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){  

    $pdf->Cell(30,10,'Document:',0,0,'l');
    $pdf->cell(80, 10, $row["id_cliente"], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Name:',0,0,'l');
    $pdf->cell(80, 10, utf8_decode($row['Nombre']), 0, 0, 'L', 0 );
    $pdf->Ln(5);

    $pdf->Cell(30,10,'Phone:',0,0,'l');
    $pdf->cell(80, 10, $row['tel_cliente'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'E-mail:',0,0,'l');
    $pdf->cell(80, 10, $row['correo_cliente'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'City:',0,0,'l');
    $pdf->cell(80, 10, utf8_decode( $row['ciudad_cliente']), 0, 1, 'L', 0 );
    $pdf->Ln(20); 
}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($mVehiculo);
$pdf->Line(20, 100, 200, 100); 
$pdf->Line(20, 110, 200, 110); 
$pdf->Cell(45,10,'Plate',0,0,'C');
$pdf->Cell(45,10,'Reference',0,0,'C');
$pdf->Cell(45,10,'Mark',0,0,'C');
$pdf->Cell(45,10,'Model',0,0,'C');
$pdf->Ln(9); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);

$pdf->cell(45, 10, $row["id_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(45, 10, $row["ref_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(45, 10, $row["marca_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(45, 10, $row["mod_vehiculo"], 0, 0, 'C', 0 );
$pdf->Ln(5);

}
$pdf->Output();

?>