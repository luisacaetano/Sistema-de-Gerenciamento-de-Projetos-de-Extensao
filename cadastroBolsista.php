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
</head>
<body class="barra">
<!--Cabeçalho --> 
	<header>
		<nav class="menu navbar-expand-md bg-azul-principal menu-fixed"> 
			<a href="telaPrincipal.php" class="navbar-brand" style="color: #fff">
				Extensão
			</a>
			<div class="posicionamento-menu" id="navbarCollapse">
				<ul class="alinhamento-usuario navbar-nav">
					<li>
						<a href="telaPrincipal.php" class="nav-link" style="color: #fff;"> Home	</a>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Extensão </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="normas.php" class="dropdown-item"> Normas </a>
							<a href="visitaTecnica.php" class="dropdown-item"> Visita Técnica</a>
							<a href="cursoExtensao.php" class="dropdown-item">Cursos e Eventos de Extensão</a>
							<a href="cursosFIC.php" class="dropdown-item"> Cursos FIC</a>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: #fff"> Bolsas </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="bolsas.php" class="dropdown-item"> Pibex e Pibex Jr </a>
						</div>
					</li>
					<li>
						<a href="status.php" class="nav-link" style="color: #fff;"> Status </a>
					</li>
				</ul>
				<ul class="navbar-nav" style="float: right;">
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="dropdownUsuario" role="button" data-toggle="dropdown" style="color: #fff"> Usuário </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="float: right;">
							<a class="dropdown-item" onclick="deslogar()">Sair</a>
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
				<article> Formulário de Cadastro e <a href="termoCompromissoBol.php" target="_blank"> Termo de Compromisso </a>Pesquisa/Extensão do Bolsista/Voluntário </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 
	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> Cadastro <b> Rápido </b> </h1>
			<p style="text-align: center; font-family: Verdana; color: blue;"> Todos os campos são de preenchimento obrigatório. </p>
			<div class="col-lg-12 card-container">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputSou" style="font-family: Verdana;">Modalidade do Projeto</label> 
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
										<option>PIBIC</option>
										<option>PIBITI</option>										
										<option>PIBIC-JR</option>
										<option>PIBEX</option>
										<option>PIBEX-JR</option>
										<option>PIBEX-PIE</option>
										<option>PIBEX-JR-PIEL</option>
										<option>Voluntário de Extensão</option>
										<option>Voluntário de Pesquisa</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputNome" style="font-family: Verdana;">Título do Projeto</label>
									<input type="text" name="nome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Pesquisador/Orientador</label>
									<input type="text" name="Pesquisador" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Nome Completo</label>
									<input type="text" name="data" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Curso</label>
									<input type="text" name="curso" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Período</label>
									<input type="text" name="curso" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Matrícula</label>
									<input type="number" name="curso" class="form-control" required="">
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Telefone Residencial</label>
									<input type="number" name="curso" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Celular</label>
									<input type="number" name="curso" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">E-mail</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira um e-mail válido" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="email" name="curso" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputcpf" style="font-family: Verdana">CPF</label>
									<input type="number" name="cpf" class="form-control" required="">
								</div>
							</div>
						</div>
						<p> <center>As informações abaixo são de preenchimento exclusivo dos bolsistas remunerados.</center></p>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputcpf" style="font-family: Verdana">Banco</label>
									<input type="text" name="cpf" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputcpf" style="font-family: Verdana">Agência</label>
									<input type="number" name="cpf" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<label for="inputcpf" style="font-family: Verdana">Conta Corrente</label>
									<input type="number" name="cpf" class="form-control" required="">
								</div>
							</div>
						</div>
            			<input type="submit" class="btn btn-lg btn-login btn-block" name="cadastrar" value="Enviar" >
            			<br>
            			<center><p>Ao clicar em Enviar, você concorda com o nosso <a href="termoCompromissoBol.php" target="_blank">Termo de Compromisso do Bolsista</a> e nosso <a href="termoCompromissoOrie.php" target="_blank"> Termo de Compromisso do Orientador</a>. </p> </center>
            			<hr class="mb-2">
            			<center><p> Sua proposta será recebida e avaliada em até de 30 dias úteis. </p> </center>
					</div>
				</div>
			</div>
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