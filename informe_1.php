<?php
require('lib_pdf\fpdf.php');
require 'Connection\conexion.php';


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('imagenes\logo.png',10,5,15);
    // Arial bold 15
    $this->SetFont('Arial','B',19);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(10,5,'Vehicle History Administration',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',12);
    //Colores de los bordes, fondo y texto    
    $this->SetTextColor(52, 73, 94);
    //Encabezados
    $this->Cell(25,10,'Document',0,0,'C');
    $this->Cell(60,10,'Name',0,0,'C');
    $this->Cell(30,10,'Phone',0,0,'C');
    $this->Cell(45,10,'E-mail',0,0,'C');
    $this->Cell(30,10,'City',0,0,'C');
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$mostrar = "select id_cliente, concat(nomb_cliente,' ',apell_cliente) as Nombre,
tel_cliente,correo_cliente,ciudad_cliente  from clientes
";

$resultado = $conexion->query($mostrar);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetLineWidth(0.1);
while($row = $resultado->fetch_assoc()){  

    $pdf->cell(25, 10, $row['id_cliente'], 1, 0, 'C', 0 );
    $pdf->cell(60, 10, $row['Nombre'], 1, 0, 'C', 0 );
    $pdf->cell(30, 10, $row['tel_cliente'], 1, 0, 'C', 0 );
    $pdf->cell(45, 10, $row['correo_cliente'], 1, 0, 'C', 0 );
    $pdf->cell(30, 10, utf8_decode( $row['ciudad_cliente']), 1, 1, 'C', 0 );
    
}

$pdf->Output();
?>