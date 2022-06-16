<?php
require('../lib_pdf\fpdf.php');
require '../Connection\conexion.php';

$docOperario = $_POST['operarioinfo'];


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
    $this->Cell(30,10,'Operators by Services Performed',0,0,'l');
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

$mostrar = "select  id_operario, concat(nomb_operario,' ',apell_operario) as Nombre, cargos.nomb_cargo
from operarios
inner join cargos
on operarios.idcargo_operario = cargos.id_cargo
where id_operario = '$docOperario'";

$mServicio = "select count(idvehi_detalle) as Cantidad, servicios_detalle.fecha_detalle
from  servicios_detalle
inner join servicios
on servicios_detalle.idservicio_detalle = servicios.id_servicio
where idope_detalle = '$docOperario'
group by fecha_detalle
order by fecha_detalle desc";

$resultado = $conexion->query($mostrar);


$pdf = new PDF('P','mm','letter' );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){  

    $pdf->Cell(30,10,'Document:',0,0,'l');
    $pdf->cell(80, 10, $row["id_operario"], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Name:',0,0,'l');
    $pdf->cell(80, 10, $row['Nombre'], 0, 0, 'L', 0 );
    $pdf->Ln(5);

    $pdf->Cell(30,10,'Position:',0,0,'l');
    $pdf->cell(80, 10, $row['nomb_cargo'], 0, 0, 'L', 0 );
    $pdf->Ln(20); 

}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($mServicio);
$pdf->Line(10, 80, 200, 80); 
$pdf->Line(10, 90, 200, 90); 
$pdf->Cell(45,10,'Number of Services',0,0,'C');
$pdf->Cell(35,10,'Date',0,0,'C');
$pdf->Ln(10); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);
   

$pdf->cell(45, 10, $row["Cantidad"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["fecha_detalle"], 0, 0, 'C', 0 );
$pdf->Ln(5);

}
$pdf->Output();

?>
