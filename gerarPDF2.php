<?php
	include './fpdf/fpdf.php'; 
	include './conn.php'; 

	$cod = $_GET["id"];
	$result_ext = "SELECT * FROM extensao WHERE CODEXTENSAO='$cod'"; 
	$resultado_ext = mysqli_query($conexao, $result_ext); 
	$row_ext = mysqli_fetch_assoc($resultado_ext);

	class PDF extends FPDF  {
		function Header() {
			$this->Image('img/logo.png',20,8,60); 
			$this->SetFont('Arial', 'B', 14); 
			$this->Cell(80); 
			$this->Ln(1);
			$this->Cell(0,10,utf8_decode('DOCUMENTO 2: PROJETO DE EXTENSÃO '),0,0,"R");
			$this->Ln(7); 
			$this->Cell(0,10,utf8_decode('SEM IDENTIFICAÇÃO'),0,0,"R");
			$this->Ln(20); 
		}
	}

	$pdf = new PDF(); 
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Ln(40);
	$pdf->Cell(0,10,utf8_decode('EDITAL nº: ____/20________'),0,0, "C"); 
	$pdf->Ln(60); 
	$pdf->Cell(0,10,utf8_decode($row_ext['NOMEPROJETO']),0,0, "C"); 
	$pdf->Ln(110);
	$pdf->Cell(0,10,utf8_decode($row_ext['CIDADE']),0,0, "C");
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('2020'),0,0, "C");
	$pdf->Ln(70);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('1. RESUMO'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['RESUMO']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('2. INTRODUÇÃO'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['INTRODUCAO']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('3. OBJETIVOS E METAS'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['OBJETIVOGERAL']),0,'L', false);
	$pdf->Ln(5);
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['OBJETIVOESPECIFICO']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('4. JUSTIFICATIVA'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['JUSTIFICATIVA']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('5. IMPACTOS ESPERADOS'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['IMPACTOS']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('6. PÚBLICO ALVO'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['PUBLICOALVO']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('7. MATERIAIS E MÉTODOS'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['MATERIAIS']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('8. CRONOGRAMA DESCRITIVO DO PROJETO'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['CRONOGRAMA']),0,'L', false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial', 'B', 12); 
	$pdf->Cell(0,10,utf8_decode('9. SISTEMA DE ACOMPANHAMENTO E AVALIAÇÃO'),0,0); 
	$pdf->Ln(10);
	$pdf->SetFont('Arial', '', 12); 
	$pdf->MultiCell(0, 8,utf8_decode($row_ext['ACOMPANHAMENTO']),0,'L', false);
	$pdf->Output(utf8_decode("Projeto de Extensão sem Identificação.pdf"),"D");
?>