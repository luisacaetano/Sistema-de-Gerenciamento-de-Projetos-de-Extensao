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
				<article> Solicitação de Visita Técnica/Participação em Eventos Sem Apresentação de Trabalho </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> <b> Solicitação de Visita Técnica </b> </h1>
			<p style="text-align: center; font-family: Verdana; color: blue;"> Todos os campos são de preenchimento obrigatório. </p>
			<div class="col-lg-12 card-container">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputSou" style="font-family: Verdana;">Tipo de Solicitação </label> 
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
										<option> Visita Técnica</option>
										<option> Participação em Evento Sem Apresentação de Trabalho</option>
									</select>
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputNome" style="font-family: Verdana;">Curso</label>
									<input type="text" name="nome" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSobrenome" style="font-family: Verdana;">Número de Passageiros</label>
									<input type="number" name="sobrenome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Professor Responsável</label>
									<input type="text" name="prof" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputEmail" style="font-family: Verdana;">Telefone</label>
									<input type="number" name="tel" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr class="mb-2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Nome da Empresa/Evento</label>
									<input type="text" name="nome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Endereço</label>
									<input type="text" name="senha" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputConfirme" style="font-family: Verdana;">Cidade/UF</label>
									<input type="text" name="conforme" class="form-control" required="">
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Telefone</label>
									<input type="number" name="senha" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputConfirme" style="font-family: Verdana;">E-mail</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira um e-mail válido" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="email" name="conforme" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Data Agendada</label>
									<input type="date" name="senha" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputConfirme" style="font-family: Verdana;">Horário</label>
									<input type="time" name="conforme" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputJusti" style="font-family: Verdana;"> Justificativa da Solicitação </label>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<hr class="mb-2">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputNome" style="font-family: Verdana;">Tipo de Transporte</label>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
										<option> Ônibus Terceirizado </option>
										<option> Veículo do IFMG - Campus Formiga </option>
										<option> Outro </option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSobrenome" style="font-family: Verdana;">Distância</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Total da Distância Aproximada em Km (ida e volta)" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="number" name="sobrenome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputNome" style="font-family: Verdana;">Data de Saída do IFMG</label>
									<input type="date" name="sobrenome" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSobrenome" style="font-family: Verdana;">Horário</label>
									<input type="time" name="sobrenome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputNome" style="font-family: Verdana;">Data de Retorno ao IFMG</label>
									<input type="date" name="sobrenome" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSobrenome" style="font-family: Verdana;">Horário Previsto de Saída</label>
									<input type="time" name="sobrenome" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="ajuda" style="font-family: Verdana;">Ajuda de Custo</label>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
										<option> Sim </option>
										<option> Não </option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="ajuda" style="font-family: Verdana;">Anexar Planilha</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Envie a planixa em anexo. " style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="file" name="arquivo" class="form-control-file form-control" required=""/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="ajuda" style="font-family: Verdana;">Informações Adicionais</label>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<br>
            			<input type="submit" class="btn btn-lg btn-login btn-block" name="cadastrar" value="Enviar Solicitação" >
            			<br>
            			<center><p>Ao clicar em Continuar, você concorda com os nossos <a href="termoRespVisitaTecnica.php">Termos de Responsabilidade</a> e está ciente de todas as regras refentes à viagem.</p> </center>
            			<hr class="mb-2">
            			<center><p> Sua proposta será recebida e avaliada em até de 10 dias úteis. </p> </center>
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