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
				<article>Termo de Compromisso do Bolsista </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"><b> Termo de Compromisso do Bolsista</b> </h1>
			<br>
			<p style="text-align: justify; font-family: Verdana; ">&nbsp; &nbsp; &nbsp; Declaro concordar, para todos os fins e consequências de direito, com as normas para iniciação científica, tecnológica e de extensão, fixadas pelo <a href="normas.php" target="_blank">Edital Nº 24/2018</a>,e com as condições do presente termo, a saber: 
			<br><br>
			<b>1. O período de vigência da execução do Plano de Trapalho proposto é de até 10 (dez) meses a contar da data de registro do projeto.</b> <br><br>
			<b>2. São obrigações do aluno: </b> <br>
			&nbsp;<b>a) </b> Executar o Plano de Trabalho aprovado. <br>
			&nbsp;<b>b) </b> Dedicar-se, exclusivamente, ao período da carga horária semanal prevista no <a href="normas.php" target="_blank">Anexo II</a> do referido edital respeitando o horário de trabalho firmado com o orientardor.  <br>
			&nbsp;<b>c) </b> Apresentar à SEPPG e ao Comitê de Avaliação, o relatório técnico parcial das atividades desenvolvidas e dos resultados parciais alcançados quando completar 6 (seis) meses da vigência do Plano de Trabalho, incluindo a assinatura do orientador aprovando o seu conteúdo. <b>A suspensão do Plano de Trabalho pode ser realizada pela <a href="https://formiga.ifmg.edu.br/extensao-pesquisa-e-pos-graduacao/" target="_blank">Secretaria de Extensão, Pesquisa e Pós-Graduação</a>, especialmente em caso de inadimplência de relatórios (frequência e/ou parcial) ou do não cumprimento de compromisso com o Programa. </b> <br>
			&nbsp;<b>d) </b> Apresentar à Secretaria de Extensão, Pesquisa e Pós-Graduação o <a href="#">Relatório Técnico Final</a> das atividades desenvolvidas e dos resultados alcançados, até 30 (trinta) dias após o término da vigência do Plano de Trabalho, incluindo a assinatura do orientador aprovando o seu conteúdo. <br>
			&nbsp;<b>e) </b> Apresentar os resultados finais do projeto mos eventos relativos à Iniciação Científica e Tecnológica promovidos pelo IFMG-Campus Formiga ou em ocasião solicitada pela SEPPG, devidamente comunicada.<br>
			&nbsp;<b>f) </b> Fazer referência a sua condição do aluno pesquisador/extensionista do IFMG-Campus Formiga nos artigos ou trabalhos que vier a publicar e remeter uma cópia para a SEPPG. <br>
			&nbsp;<b>g) </b> Cumprir rigorosamente os prazos estipulados pela Secretaria de Extensão, Pesquisa e Pós-Graduação. <br> <br>
			<b>3. O aluno pesquisador/extensionista que tiver seu Plano de Trabalho cancelado sem justificativa relevante, por escrito, não mais poderá candidatar-se a Bolsas de Iniciação Científica, Tecnológica e Extensão. </b> <br>
			</p>
			<a href="cadastroBolsista.php" type="submit" class="btn btn-lg btn-block btn-login" style="color: white;"> Aceitar e Continuar</a>
			<br><center><p>Ao clicar em Continuar, você concorda com os nossos <a href="termoCompromissoBol.php">Termos de Compromisso</a>.</p> </center>
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