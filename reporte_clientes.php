<?php
	include 'plantilla_clientes.php';
	require 'conexion.php';
	
	$query = "SELECT nombre_completo, correo, contraseña FROM clientes_REGISTRO";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(50,6,'CORREO',1,0,'C',1);
    $pdf->Cell(40,6,'CONTRASENA',1,1,'C',1);

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
	
        $pdf->Cell(50,6,utf8_decode($row['nombre_completo']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['correo']),1,0,'C');
        $pdf->Cell(40,6,($row['contraseña']),1,1,'C');
	}
	$pdf->Output();
?>
