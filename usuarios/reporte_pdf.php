<?php
$id=$_GET['id'];
  include 'plantilla_pdf_reporte.php';
include_once("conexion.php");
$sentencia=$bd->query("
SELECT  *
  FROM cita c
  JOIN paciente p
   ON c.paciente=p.nombre_apellido
  JOIN especialista e
  ON c.id_especialista =e.id_especialista
  JOIN especialidad d
  ON  e.id_especialidad=d.id_especialidad
WHERE  c.estado='asignado' 
AND  c.id_cita='$id'
  ;");
//FecthAll va devolver todas las filas de la base de dato (::)accede a elemtos estatico y costantes y metodos de una clase , fecth_obl devuelve la fila de cada columna 
$paciente=$sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php
  $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetY(150);
$pdf->SetX(30);
    $pdf->SetFillColor(38, 156, 229 );
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B',8);
$pdf->SetX(30);
 $pdf->Cell(55,-8,'ESTADO:',1,1,'C',1,false);
 $pdf->SetX(30);
 $pdf->Cell(55,-8,utf8_decode('HORA:'),1,1,'C',1,false);
 $pdf->SetX(30);
 $pdf->Cell(55,-8,'FECHA:',1,1,'C',1,false);
$pdf->SetX(30);
 $pdf->Cell(55,-8,'ESPECIALISTA:',1,1,'C',1,false);
$pdf->SetX(30);
 $pdf->Cell(55,-8,'ESPECIALIDAD ESCOGIDA:',1,1,'C',1,false);
$pdf->SetX(30);
 $pdf->Cell(55,-8,'PACIENTE:',1,1,'C',1,false); 
$pdf->SetX(30);
 $pdf->Cell(55,-8,'CEDULA:',1,1,'C',1,false);
 $pdf->SetX(30);
 $pdf->Cell(55,-8,'CODIGO CITA',1,1,'C',1,false);
    $pdf->SetFont('Arial','',8);
  $pdf->SetFillColor(255,255,255);
  $pdf->SetTextColor( 0, 0, 0);
  foreach($paciente as $row) {
  $pdf->SetX(84);
$pdf->Cell(-19);
         $pdf->SetX(85);
       $pdf->Cell(83,8,utf8_decode($row->id_cita),1,1,'C',false);
     $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->cedula),1,1,'C',1,false);
    $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->nombre_apellido),1,1,'C',1,false);
 $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->nombre_especialidad),1,1,'C',1,false);
 $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->nombre_doctor),1,1,'C',1,false);
 $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->fecha),1,1,'C',1,false);
$pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->hora),1,1,'C',1,false);
 $pdf->SetX(85);
$pdf->Cell(83,8,utf8_decode($row->estado),1,1,'C',1,false);
    }
  $pdf->Output();
?>