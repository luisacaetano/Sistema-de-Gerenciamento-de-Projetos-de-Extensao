<?php
	session_start();
	include_once("conn.php");

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	if(!empty($id)){
		$result = "DELETE FROM extensao WHERE CODEXTENSAO='$id'";
		$resultado = mysqli_query($conexao, $result);
		if(mysqli_affected_rows($conexao)){
			$_SESSION['msg'] = "<p style='color:green;'>Projeto cancelado com sucesso!</p>";
			header("Location: status.php");
		}else{
			
			$_SESSION['msg'] = "<p style='color:red;'>Erro o projeto não foi apagado com sucesso! </p>";
			header("Location: status.php");
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um projeto! </p>";
		header("Location: status.php");
	}
?>
