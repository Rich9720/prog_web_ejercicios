<?php
	include 'plantilla_productos.php';
	require 'conexion.php';
	
	$query = "SELECT  nombre, descripcion,  precio FROM productos";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->Ln();
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(50,6,'DESCRIPCION',1,0,'C',1);
    $pdf->Cell(30,6,'PRECIO',1,1,'C',1);

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
	
        $pdf->Cell(50,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['descripcion']),1,0,'C');
        $pdf->Cell(30,6,($row['precio']),1,1,'C');
	}
	$pdf->Output();
?>
