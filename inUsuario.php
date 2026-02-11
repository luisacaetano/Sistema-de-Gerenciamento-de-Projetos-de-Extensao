<?php 
	include_once("conn.php");

	$categoria=$_POST['categoria'];
	$cpf=$_POST['cpf']; 
	$nome=$_POST['nome']; 
	$sobrenome=$_POST['sobrenome']; 
	$genero=$_POST['genero']; 
	$email=$_POST['email']; 
	$datanascimento=$_POST['data']; 
	$celular=$_POST['celular']; 
	$senha=$_POST['senha']; 
	$confirmeSenha=$_POST['confirmeSenha']; 
	$sql="INSERT INTO usuario (CATEGORIA, CPF, NOME, SOBRENOME, GENERO, EMAIL, DATANASCIMENTO, CELULAR, SENHA, CONFIRMESENHA) VALUES ('$categoria', '$cpf', '$nome', '$sobrenome', '$genero', '$email', '$datanascimento', '$celular', '$senha', '$confirmeSenha')";
	mysqli_query($conexao,$sql) or die("[ERRO AO TENTAR CADASTRAR USUÁRIO]"); 
	mysqli_close($conexao); 
	header("Location: cadastroUsuario.php?msg=sucesso");  
?>