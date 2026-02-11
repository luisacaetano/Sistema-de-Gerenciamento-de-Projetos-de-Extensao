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
				<article> Projeto Pedagógico de Curso Simplificado </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> <b> Projeto Pedagógico de Curso </b> </h1>
			<p style="text-align: center; font-family: Verdana; color: blue;"> Todos os campos são de preenchimento obrigatório.</p>
			<div class="col-lg-12 card-container">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSou" style="font-family: Verdana;">CNPJ do Campus </label> 
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="number" name="nome" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputCPF" style="font-family: Verdana;">Razão Social</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Instituto Federal de Educação, Ciência e Tecnologia de Minas Gerais / Campus..." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="text" name="nome" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSobrenome" style="font-family: Verdana;">Esfera Adiministrativa</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Federal" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<input type="text" name="nome" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Endereço da Instituição</label>
									<input type="text" name="termino" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputEmail" style="font-family: Verdana;">Telefone/FAX</label>
									<input type="number" name="vagas" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputEmail" style="font-family: Verdana;">Site da Instituição</label>
									<input type="url" name="vagasExt" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputGenero" style="font-family: Verdana;">Nome do Curso</label>
									<input type="text" name="vagasExt" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputEmail" style="font-family: Verdana;">Número de Vagas por Turma</label>
									<input type="number" name="programa" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Periodicidade das aulas </label>
									<input type="text" name="programa" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputSenha" style="font-family: Verdana;">Carga-Horária </label>
									<input type="number" name="programa" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputConfirme" style="font-family: Verdana;">Modalidade da Oferta</label>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
											<option>Presencial</option>
											<option>Semi-Presencial</option>
											<option>A Distância</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<div class="form-group">
									<label for="inputConfirme" style="font-family: Verdana;">Turno</label>
									<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="">
										<option selected=""> Selecione </option>
										<option>Manhã</option>
										<option>Tarde</option>
										<option>Noite</option>
									</select>
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Local das Aulas</label>
									<input type="text" name="programa" class="form-control">
								</div>
							</div>
						</div>
						<label for="inputResp" style="font-family: Verdana;"> Dados do Responsável pelo Curso</label>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<input type="text" name="programa" class="form-control" placeholder="Nome Completo">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<input type="email" name="programa" class="form-control" placeholder="E-mail">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
									<input type="text" name="programa" class="form-control" placeholder="Titular">
								</div>
							</div>
						</div>
						<hr class="md-2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Justificativa</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva as razões que levam o Campus a propor a oferta do curso. Esclareça a importância do curso para a comunidade local, e, se possível, explicitar a relação do curso com os demais ofertados pela instituição" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Objetivos do Curso</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva os objetivos do curso subdividindo-os em geral (principal finalidade do curso) e específicos (detalhamento do objetivo geral)" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Público-Alvo</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva  o perfil do público a quem se destina o curso" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Pré-Requisitos e Mecanismos de Acesso ao Curso</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Explicite os pré-requisitos de acesso ao curso, como idade, escolaridade e outros. Explicite os mecanismos de acesso ao curso (processo seletivo/inscrições)" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Procedimentos Didáticos-Metodológicos</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva a metodologia utilizada pelo(s) professor(es) para o ensino dos componentes curriculares" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Descrição dos Principais Instrumentos de Avaliação</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva os instrumentos utilizados para a avaliação de desempenho dos alunos. Descreva os procedimentos utilizados para a avaliação da prática docente e do curso." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Definição dos Mínimos de Frequência e/ou Aproveitamento da Aprendizagem para Fins de Aprovação/Certificação</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Explicitar a frequência mínima obrigatória no curso (75%).Defina o mínimo de aproveitamento da aprendizagem, se couber" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="2"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<div class="form-group">
									<label for="inputResp" style="font-family: Verdana;"> Infraestrutura Física e Aproveitamento</label>
									<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva a infraestrutura física disponível (laboratórios, salas de aula, biblioteca, oficinas). Liste os materiais e equipamentos já existentes para a oferta do curso, indicando a quantidade por item. Liste os materiais e equipamentos a serem adquiridos para a oferta do curso, indicando a quantidade por item." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
									 	?
									</button>
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
						</div>
            			<a href="#" class="btn btn-login btn-lg btn-block" name="proximo" style="color: white;">Enviar</a>
            			<br>
	            			<center><p>Ao clicar em Enviar, você concorda com os nossos <a href="normas.php" target="_blank">Termos</a>. </p> </center>
	            			<hr class="md-2">
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