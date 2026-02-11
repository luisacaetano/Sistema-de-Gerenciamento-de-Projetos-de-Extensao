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
			$this->Cell(0,10,utf8_decode('DOCUMENTO 1: FORMULÁRIO DE '),0,0,"R");
			$this->Ln(7); 
			$this->Cell(0,10,utf8_decode('CADASTRO DE PROJETO DE EXTENSÃO'),0,0,"R");
			$this->Ln(20); 
		}
		function Footer(){
			$this->SetY(-35); 
			$this->Cell(0,0,utf8_decode('Local e Data: ___________________________________, _______ de _______________ de ______.')); 
			$this->Ln(30);
			$this->Line(50,280,160,280); 
			$this->SetFont('Arial', 'I',10); 
			$this->Cell(0,0,utf8_decode('Assinatura do Orientador'),0,0, "C");
		}
	}

	$pdf = new PDF(); 
	$pdf->AddPage();
	$pdf->SetFont('Arial', '', 12); 
	$pdf->Cell(0,10,utf8_decode('Edital nº: ____/20________'),1,0); 
	$pdf->Ln(10); 
	$pdf->Cell(0,10,utf8_decode('Título do Projeto: ').utf8_decode($row_ext['NOMEPROJETO']),1,0); 
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Nome do Orientador: ').utf8_decode($row_ext['ORIENTADOR']),1,0);
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Nome do Coorientador: ').utf8_decode($row_ext['COORIENTADOR']),1,0);
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Colaborador(es) Eventual(ais): ').utf8_decode($row_ext['RESPONSAVEIS']),1,0);
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Será desenvolvido com parceiros extternos ao IFMG - Campus Formiga? ').utf8_decode($row_ext['ASSOCIADO']),1,0);
	$pdf->Ln(10);
	$pdf->MultiCell(0, 8, utf8_decode('Identificação do parceiro (Empresa, associações, pessoa física, entre outros): ').utf8_decode($row_ext['ASSOCIADORESP']),1,'L', false); 
	$pdf->Cell(0,10,utf8_decode('Área Temática: ').utf8_decode($row_ext['AREATEMATICA']),1,0);
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Linha de Extensão: ').utf8_decode($row_ext['LINHAEXTENSAO']),1,0);
	$pdf->Ln(10);
	$pdf->Cell(0,10,utf8_decode('Tipo de Ação: ').utf8_decode($row_ext['ACAO']),1,0);
	$pdf->Ln(20);
	$pdf->MultiCell(0, 8, utf8_decode('Resumo: ').utf8_decode($row_ext['RESUMO']),1,'L', false);
	$pdf->Output(utf8_decode("Formulário de Cadastro de Projeto de Extensão.pdf"),"D");
?>