<?php
	session_start();
	include_once("conn.php");

	$msg=0;
	@$msg=$_REQUEST['msg'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Extensão, Pesquisa e Pós-Graduação </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./img/images.ico" type="image/x-icon" />
</head>
<body class="barra">
<!--Cabeçalho --> 
	<header>
		<nav class="menu navbar-expand-md bg-azul-principal menu-fixed"> 
			<a href="telaPrincipal.php" class="navbar-brand" style="color: #fff">
				Extensão
			</a>
			<div class="posicionamento-menu" id="navbarCollapse">
				<ul class="navbar-nav" style="float: right;">
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="dropdownUsuario" role="button" data-toggle="dropdown" style="color: #fff"> Já tem uma conta? </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="float: right;">
							<a class="dropdown-item" href="index.php">Faça login</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Fim do Cabeçalho --> 
	<!-- Barra de Informação --> 
	<div class="input-group bg-light pl-4 pt-3 pb-3" id="barraInformacaoTopo">
		<div>
			<div class="text-muted">
				<article> Cadastro de Usuário </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> Cadastro <b> Rápido </b> </h1>
			<?php if($msg=="sucesso"): ?>
				<p style="color: red"> Usuário cadastrado com sucesso! </p>
			<?php else: ?>
			<p style="text-align: center; font-family: Verdana; color: blue;"> Todos os campos são de preenchimento obrigatório. </p>
			<div class="col-lg-12 card-container">
				<div class="card">
					<div class="card-body">
						<form enctype="multipart/form-data" method="POST" action="inUsuario.php" name="enviarDados">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="categoria" id="categoria" style="font-family: Verdana;">Eu sou... </label> 
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<select class="form-control" id="categoria" name="categoria" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected="" value="sel"> Selecione </option>
										<option value="Colaborador Externo"> Colaborador Externo </option>
										<option value="Discente"> Discente </option>
										<option value="Servidor"> Servidor </option>
										<option value="Voluntário"> Voluntário </option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="cpf" id="cpf" style="font-family: Verdana;">CPF</label>
									<input type="number" id="cpf" class="form-control" name="cpf" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="nome" style="font-family: Verdana;" id="nome">Nome</label>
									<input type="text" name="nome" class="form-control" required="" id="nome">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="sobrenome" style="font-family: Verdana;" id="sobrenome">Sobrenome</label>
									<input type="text" name="sobrenome" class="form-control" required="" id="sobrenome">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="genero" style="font-family: Verdana;" id="genero">Gênero</label>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="genero" name="genero">
										<option selected="" value="sel"> Selecione </option>
										<option value="fem"> Feminino </option>
										<option value="masc"> Masculino</option>
										<option value="outro"> Outro </option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="email" style="font-family: Verdana;" id="email">E-mail</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira um e-mail válido" style="margin: 5px; color: white; padding: 0.5px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="email" id="email" name="email" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="data" style="font-family: Verdana;" id="data">Data de Nascimento</label>
									<input type="date" name="data" class="form-control" required="" id="data">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="celular" style="font-family: Verdana;" id="celular">Celular</label>
									<input type="number" name="celular" class="form-control" required="" id="celular">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="senha" style="font-family: Verdana;" id="senha">Senha</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Sua nova senha deve ter um mínimo de 8 caracteres e conter letras maiúsculas (A-Z), letras minúsculas (a-z) e números (0-9)" style="margin: 5px; color: white; padding: 0.5px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="password" name="senha" class="form-control" required="" id="senha">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="confirmeSenha" style="font-family: Verdana;" id="confirmeSenha">Confirme sua senha</label>
									<input type="password" name="confirmeSenha" class="form-control" required="" id="confirmeSenha">
								</div>
							</div>
						</div> <br>
            			<input type="submit" class="btn btn-lg btn-login btn-block" value="Criar Minha Conta" >
            			<br>
            			<center><p>Já tem uma conta? <a href="index.php">Faça login</a></p></center>
					</div>
					</form>
				</div>
			</div>
			<?php endif; ?>
		</section>
	</div>
	 <!-- Rodapé --> 
	<section id="footer">
		<div class="container">		
			<div class="row">
				<div class="col-sm-12 ">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/IFMG-Campus-Formiga-215147991850013/" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/ifmgformiga" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.instagram.com/ifmgnarede/" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://formiga.ifmg.edu.br/" target="_blank">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.youtube.com/user/ifmgcampusformiga" target="_blank">
								<i class="fa fa-youtube"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&hd=ifmg.edu.br&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">
								<i class="fa fa-envelope"></i>
							</a>
						</li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p> O setor de Extensão do Campus Formiga está inserido na <a href="#"> <u> Secretaria de Extensão, Pesquisa e Pós-Graduação</u></a> (SEPPG) e é o órgão que tem por finalidade articular e apoiar a execução da política de extensão do Campus e do IFMG, seja através de ações específicas das áreas acadêmicas, seja através de ações institucionais, buscando uma integração mais efetiva da instituição com a realidade social na qual está inserida.</p>
					<p class="h6">&copy All right Reversed. Designed and built by Luisa Caetano Araújo.</p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- Fim do Rodapé -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
    </script>
    <script type="text/javascript">
		function deslogar() {
			localStorage.removeItem("usuario"); 
			window.location = "index.php";
		}
	</script>
</body>
</html>