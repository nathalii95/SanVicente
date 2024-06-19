<?php




	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{

		
			 // imagen
			$this->Image('../images/consultorio.png', 55, 5, 24 );

		/////1	

			 // Arial bold 15
			$this->SetFont('Arial','B',10);
			$this->Cell(30);


// Colores de los bordes, fondo y texto


//////////////2222
$this->SetTextColor(25, 37, 126);
 // Título
$this->SetFont('Arial','B',20);
 
			$this->Cell(185,8, utf8_decode('
				CONSULTORIO MÉDICO'),0,0,'C');


   // Salto de línea

			$this->Ln(15);


    $this->SetTextColor(25, 37, 126);
    $this->SetFont('Arial','B',17);
 // Título
 
			$this->Cell(255,-7, '"SAN VICENTE"',0,0,'C');



   // Salto de línea

			$this->Ln(4);




//////////////2222
   
    $this->SetTextColor(134, 140, 140);
$this->SetFont('Arial','B',10);

			$this->Cell(250,-2, utf8_decode('DR. PEDRO YAGUAL OLIVARES'),0,0,'C');

   // Salto de línea

			$this->Ln(20);
	$this->Ln(8);
//////////////3
   
    $this->SetTextColor(134, 140, 140);
    $this->SetFont('Arial','B',10);


			$this->Cell(250,-46,(utf8_decode('Enfermedades de Adultos y Niños, Cirugías Menor, Terapia Respiratoria')),0,0,'C');

   // Salto de línea

			$this->Ln(20);





//////////////4
   
    $this->SetTextColor(134, 140, 140);
$this->SetFont('Arial','B',10);

			$this->Cell(250,-77, utf8_decode('Ginecología, Obstetricia, Papanicolaou, Cauterizaciones'),0,0,'C');

   // Salto de línea

			$this->Ln(-15);
  $this->SetTextColor(134, 140, 140);
$this->SetFont('Arial','B',10);

			$this->Cell(250,-37,utf8_decode( 'Callejón 11ava. 2434 y Cristóbal Colón'),0,0,'C');
$this->Ln(5);
  $this->SetTextColor(134, 140, 140);
$this->SetFont('Arial','B',10);

			$this->Cell(250,-37, 'Telfs: 2337960  Movistar: 0995726817 ',0,0,'C');


//////////////
   
 







		}
		
		function Footer()
		{


    // Posición a 1,5 cm del final
			$this->SetY(-15);

			  // Arial itálica 10
			$this->SetFont('Arial','B', 10);

 // Color del texto en gris
    $this->SetTextColor(134, 140, 140);

$this->Cell(275,-9, utf8_decode('CUIDE SU SALUD '),0,0,'C');
$this->Ln(4);


//////////////
   	  // Arial itálica 10
			$this->SetFont('Arial','B', 10);
    $this->SetTextColor(134, 140, 140);



			$this->Cell(0,-9, utf8_decode('ACUDA A TIEMPO AL MÉDICO'),0,0,'C');

   // Salto de línea

			$this->Ln(-6);




 // Número de página

 $this->SetTextColor(0,0,0);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>