<?php
	require 'C://xampp/htdocs/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
            $this->Image('C://xampp/htdocs/VISUAL_CODE_PHP/img/logo.jpg', 5, 5, 30 );
            
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
        	$this->Cell(100,10, 'DaarGames.store',0,2,'C');
            $this->Cell(120,10, 'Reporte De Productos DaarGames',0,0,'C'); 
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>