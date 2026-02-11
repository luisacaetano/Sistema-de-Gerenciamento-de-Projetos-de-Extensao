<?php 
	session_start(); 
	include_once("conn.php");

	$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nomeProjeto=filter_input(INPUT_POST, 'nomeProjeto', FILTER_SANITIZE_STRING); 
	$categoria=filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING); 
	$cargaHoraria=filter_input(INPUT_POST, 'cargaHoraria', FILTER_SANITIZE_NUMBER_INT); 
	$qtdvagas=filter_input(INPUT_POST, 'qtdvagas', FILTER_SANITIZE_NUMBER_INT);
	$qtdvagasExt=filter_input(INPUT_POST, 'qtdvagasExt', FILTER_SANITIZE_NUMBER_INT); 
	$responsaveis=filter_input(INPUT_POST, 'responsaveis', FILTER_SANITIZE_STRING);
	$desc=filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING); 
	$objetivosG=filter_input(INPUT_POST, 'objetivosG', FILTER_SANITIZE_STRING); 
	$objetivosE=filter_input(INPUT_POST, 'objetivosE', FILTER_SANITIZE_STRING); 
	$publicoAlvo=filter_input(INPUT_POST, 'publicoAlvo', FILTER_SANITIZE_STRING); 
	$preRequisitos=filter_input(INPUT_POST, 'preRequisitos', FILTER_SANITIZE_STRING); 
	$metodologia=filter_input(INPUT_POST, 'metodologia', FILTER_SANITIZE_STRING);
	$recursos=filter_input(INPUT_POST, 'recursos', FILTER_SANITIZE_STRING);

	$result="UPDATE extensao SET NOMEPROJETO = '$nomeProjeto', CATEGORIA = '$categoria', CARGAHORARIA = '$cargaHoraria', QTDVAGAS = '$qtdvagas', VAGASEXTERNO = '$qtdvagasExt', RESPONSAVEIS = '$responsaveis', DESCRICAO = '$desc', OBJGERAIS = '$objetivosG', OBJESPECIFICOS = '$objetivosE', PUBLICOALVO = '$publicoAlvo', PREREQUISITOS = '$preRequisitos', METODOLOGIA = '$metodologia', RECURSOS = '$recursos' WHERE CODEXTENSAO = '$id'"; 

	$resultado=mysqli_query($conexao, $result); 
	mysqli_query($conexao,$result) or die(mysqli_error($conexao)); 
	mysqli_close($conexao); 
	header("Location: editarProjeto.php?msg=sucesso"); 
	
 ?>