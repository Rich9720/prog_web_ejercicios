<?php
	require 'C://xampp/htdocs/fpdf/fpdf.php'; //Previamente instalamos estas librerias en la carpeta raiz del proyecto
	
	class PDF extends FPDF
	{
		function Header()
		{
            $this->Image('C://xampp/htdocs/VISUAL_CODE_PHP/img/logo.jpg', 165, 5, 30  ); //Logo de la empresa
            
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
        	$this->Cell(105,10, 'DaarGames.store',0,1,'C');
            $this->Cell(110,10, 'Reporte De Clientes',0,0,'R'); 
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