<?php
$id=$_GET['id'];
  include 'plantilla_recetario.php';
include_once("conexion.php");
$sentencia=$bd->query("
SELECT  *
  FROM recetario 
WHERE  id_recetario='$id'
  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$recetario=$sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php
  $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetY(120);
$pdf->SetX(30);
    $pdf->SetFillColor(255, 255, 255,0.5);
    $pdf->SetTextColor(34,34,34);
    $pdf->SetFont('Arial','B',8);
$pdf->SetXY(15, 185);
 $pdf->Cell(55,-8,'DESCRIPCION:',111,1,'C',1,false);
$pdf->SetXY(15, 145);
 $pdf->Cell(55,-8,'MEDICAMENTO:',111,1,'C',1,false);
$pdf->Ln();
$pdf->SetXY(15, 105);
 $pdf->Cell(50,-8,'SINTOMAS:',111,1,'C',1,false);
$pdf->SetXY(30, 85);
$pdf->Ln();
 $pdf->Cell(60,-8,'PACIENTE:',111,1,'C',1,false); 
$pdf->SetXY(30, 75);
$pdf->Ln();
 $pdf->Cell(55,-8,'FECHA:',111,1,'C',1,false);
    $pdf->SetFont('Arial','',8);
  $pdf->SetFillColor(255,255,255);
  $pdf->SetTextColor( 0, 0, 0);
  foreach($recetario as $row) {
  $pdf->SetX(84);
$pdf->Cell(-19);
       $pdf->SetX(80);
$pdf->Cell(5,8,utf8_decode($row->fecha),111,1,'C',1,false);
  $pdf->Ln();
    $pdf->SetX(85);
$pdf->Cell(5,-3,utf8_decode($row->paciente),111,1,'C',1,false);
 $pdf->Ln();
    $pdf->SetFont('Arial','',8);


 $pdf->SetFillColor(38, 156, 229 );
    $pdf->SetTextColor(255,255,255);
$pdf->SetXY(30, 105);
$pdf->Cell(175,25,utf8_decode($row->sintomas),1,1,'C',1,false);
$pdf->SetXY(30, 145);
$pdf->Cell(175,25,utf8_decode($row->medicamento),1,1,'C',1,false);
$pdf->SetXY(30, 185);
$pdf->Cell(175,25,utf8_decode($row->descripcion),1,1,'C',1,false);
    }
  $pdf->Output();
?>