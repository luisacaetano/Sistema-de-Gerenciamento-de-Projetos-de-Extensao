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
				<article> Extensão, Pesquisa e Pós-Graduação </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"><b> Curso e Evento de Extensão </b> </h1>
			<p style="text-align: justify; font-family: Verdana; ">&nbsp; &nbsp; &nbsp; Abaixo você encontra todos os documentos referentes ao cadastro de um Curso/Evento de Extensão. Em caso de dúvidas, contate o setor de Extensão do Campus Formiga.
			<br><br>
			<b>1. </b> O cadastro de um novo <a href="cadastroParte1.php" target="_blank">Curso/Evento de Extensão</a> deverá ser preenchido e enviado à Extensão para início do processo. <br>
			<b>2. </b> A <a href="./documentos/ListaPresencaCurso.pdf" target="_blank">Lista de Presença</a> deverá ser assinada por todos os alunos que participarem do Curso/Evento de Extensão.<br>
			<b>3. </b> A <a href="./documentos/ListaPresencaMultiplosDias.pdf" target="_blank">Lista de Presença de Múltiplos Dias</a> deverá ser assinada por todos os alunos que participarem do Curso/Evento de Extensão nos dias solicitados. <br>
			<b>4. </b> O <a href="relacaoConcluintes.php" target="_blank">Relatório de Concluintes</a> e a <a href="./documentos/RelacaoConcluintes.pdf" target="_blank">Relação de Concluintes</a> deverão ser preenchido para entrega do certificado dos alunos que concluiram o Curso/Evento de Extensão.<br>
			<b>5. </b> O <a href="relatorioCurso.php" target="_blank">Relatório de Curso/Evento de Extensão</a> deverá ser preenchido ao término do projeto.<br>
			<br>
			<div class="row"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<div class="card mb-4 shadow-sm" style="width: 20rem;">
				  	<img class="card-img-top" src="./img/listaPresencaCurso.PNG" alt="Card image cap">
				  	<div class="card-body">
				    	<center><h5 class="card-title">Lista de Presença Curso/Evento de Extensão</h5></center>
				    	<a href="http://localhost/ProjExtensao/documentos/ListaPresencaCurso.pdf" target="_blank" class="btn btn-login" style="float: right; color: white">Vizualizar</a>
				  	</div>
				</div> &nbsp; &nbsp;
				<div class="card mb-4 shadow-sm" style="width: 20rem;">
				  	<img class="card-img-top" src="./img/ListaPresencaMultiplosDias.PNG" alt="Card image cap">
				  	<div class="card-body">
				    	<center><h5 class="card-title">Lista de Presença Curso/Evento de Extensão - Múltiplos Dias</h5></center>
				    	<a href="http://localhost/ProjExtensao/documentos/ListaPresencaMultiplosDias.pdf" target="_blank" class="btn btn-login" style="float: right; color: white">Vizualizar</a>
				  	</div>
				</div> &nbsp; &nbsp; 
					<div class="card mb-4 shadow-sm" style="width: 20rem;">
					  	<img class="card-img-top" src="./img/relacaoConcluintes.PNG" alt="Card image cap">
					  	<div class="card-body">
					    	<center><h5 class="card-title">Relação de Concluintes</h5></center>
					    	<a href="http://localhost/ProjExtensao/documentos/RelacaoConcluintes.pdf" target="_blank" class="btn btn-login" style="float: right; color: white">Vizualizar</a>
					  	</div>
					</div> &nbsp; &nbsp; 					
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