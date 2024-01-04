<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reportes de datos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(10,10, 'No.',1,0,'C',0);
    $this->cell(50,10, utf8_decode('Nombre'),1,0,'C',0);
    $this->cell(40,10, 'CUI',1,0,'C',0);
    $this->cell(20,10, 'Edad',1,0,'C',0);
    $this->cell(30,10, 'Estado Civil',1,0,'C',0);
    $this->cell(40,10,utf8_decode('Dirección'),1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$mysqli = new mysqli ("localhost", "root", "", "registros");
$consulta= "SELECT * FROM persona";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(10,10, $row['codigo'],1,0,'C',0);
    $pdf->cell(50,10, utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->cell(40,10, $row['cui'],1,0,'C',0);
    $pdf->cell(20,10, $row['edad'],1,0,'C',0);
    $pdf->cell(30,10, $row['estadocivil'],1,0,'C',0);
    $pdf->cell(40,10,utf8_decode( $row['direccion']),1,1,'C',0);

}

$pdf->Output();
?>