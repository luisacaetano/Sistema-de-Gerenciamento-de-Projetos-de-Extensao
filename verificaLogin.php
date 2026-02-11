<?php
	session_start(); 
	include_once("conn.php"); 

	if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
		$email = mysqli_real_escape_string($conexao, $_POST['email']); 
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']); 
		//$senha = md5($senha); 

		$sql = "SELECT * FROM usuario WHERE EMAIL = '$email' && SENHA = '$senha' LIMIT 1"; 
		$result = mysqli_query($conexao, $sql); 
		$resultado =mysqli_fetch_assoc($result); 

		if (($email == "admin@admin") && ($senha == "admin")) {
			header("Location: admin.php"); 
		} elseif (empty($resultado)) {
			$_SESSION['loginErro'] = "Usuário ou senha incorretos!"; 
			header("Location: index.php"); 
		} elseif (isset($resultado)) {
			header("Location: telaPrincipal.php"); 
		} else {
			$_SESSION['loginErro'] = "Usuário ou senha incorretos!"; 
			header("Location: index.php"); 
		}

	} else {
		$_SESSION['loginErro'] = "[ERROR] Usuário ou senha incorreto! Tente novamente..."; 
		header("Location: index.php"); 
	}
?>