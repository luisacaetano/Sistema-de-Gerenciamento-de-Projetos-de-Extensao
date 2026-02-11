+<!DOCTYPE html>
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
			<h1 style="text-align: center; font-family: Verdana;"><b> Visita Técnica </b> </h1>
			<br>
			<p style="text-align: justify; font-family: Verdana; ">&nbsp; &nbsp; &nbsp; Abaixo você encontra todos os documentos referentes à solicitação de Visita Técnica. Em caso de dúvidas, contate o setor de Extensão do Campus Formiga.
			<br><br>
			<b>1. </b> A <a href="solicitacaoVisitaT.php" target="_blank">Solicitação de Visita Técnica</a> deverá ser preenchida e enviada à Extensão para início do processo. <br>
			<b>2. </b> O <a href="termoRespVisitaTecnica.php" target="_blank">Termo de Responsabilidade</a> deverá ser assinado por todos os alunos que participarão da visita e enviado à Extensão com antecedência.<br>
			<b>3. </b> A <a href="./documentos/ListaPresenca.pdf" target="_blank">Lista de Presença</a> deverá ser enviada à Extensão para fins de solicitação de transporte. <br>
			<b>4. </b> A <a href="https://drive.google.com/file/d/0B-VUhsbeJ_pIdTJxSk55anNJMWtLYkxYdi15aGVJbmdLTTRN/view" target="_blank">Planilha</a> deverá ser preenchida nos casos em que será solicitada ajuda financeira para os alunos e encaminhada com antecedência para a Extensão (conforme disponibilidade orçamentária).<br>
			<b>5. </b> O <a href="relatorioVisitaTec.php" target="_blank">Relatório de Visita Técnica</a> deverá ser elaborado após a realização da visita e enviado à Extensão.<br>
			<b>6. </b> O aluno sem conta bancária deverá preencher a <a href="./documentos/DispensaAjudaCusto.pdf" target="_blank">Dispensa de Ajuda de Custo</a>.<br>
			<b>7. </b> Caso o aluno opte em ir em veículo próprio deverá preencher o <a href="./documentos/TermoTransporte.pdf" target="_blank">Termo de Responsabilidade de Veículo Próprio</a>.<br>
			<b>8. </b> A <a href="./documentos/DeclaracaoParticipacao.pdf" target="_blank">Declaração de Participação</a>  deverá ser preenchida constando o nome de todos os alunos participantes, assinada pelo professor que acompanhou os alunos na visita técnica e ser enviado à SEPPG. </p> <br>
			<p style="text-align: justify; font-family: Verdana; "> &nbsp; &nbsp; &nbsp; Em caso de utilização de veículos oficiais, é necessário criar um processo via SEI de "Autorização de Uso de Veículo Oficial", inserir o formulário de "Autorização de Uso de Veículo Oficial" e disponibilizá-lo para assinatura da direção geral no FOR-DG. Em seguida, o processo deve ser enviado para o DAP-CGM. </p> <br>
			<div class="row"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<div class="card mb-4 shadow-sm" style="width: 20rem;">
				  	<img class="card-img-top" src="./img/visitaTecnica.PNG" alt="Card image cap">
				  	<div class="card-body">
				    	<center><h5 class="card-title">Regulamentação de Visita Técnica no Âmbito do IFMG</h5></center>
				    	<a href="https://formiga.ifmg.edu.br/documents/2017/Extensao/Portaria-03.2015-Regulamento-Visita-Tcnica.pdf" target="_blank" class="btn btn-login" style="float: right; color: white">Vizualizar</a>
				  	</div>
				</div> &nbsp; &nbsp; 
				<div class="card mb-4 shadow-sm" style="width: 20rem;">
				  	<img class="card-img-top" src="./img/listaPresenca.PNG" alt="Card image cap">
				  	<div class="card-body">
				    	<center><h5 class="card-title">Lista de Passageiros</h5></center>
				    	<a href="http://localhost/ProjExtensao/documentos/ListaPresenca.pdf" class="btn btn-login" target="_blank" style="float: right; color: white">Vizualizar</a>
				  	</div>
				</div> &nbsp; &nbsp;
				<div class="card mb-4 shadow-sm" style="width: 20rem;">
				  	<img class="card-img-top" src="./img/planilha.PNG" alt="Card image cap">
				  	<div class="card-body">
				    	<center><h5 class="card-title">Solicitação de Ajuda Financeira para os Alunos</h5></center>
				    	<a href="https://drive.google.com/file/d/0B-VUhsbeJ_pIdTJxSk55anNJMWtLYkxYdi15aGVJbmdLTTRN/view" class="btn btn-login" style="float: right; color: white" target="_blank">Vizualizar</a>
				  	</div>
				</div> 
				<div class="row"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<div class="card mb-4 shadow-sm" style="width: 20rem;">
					  	<img class="card-img-top" src="./img/dispensa.PNG" alt="Card image cap">
					  	<div class="card-body">
					    	<center><h5 class="card-title">Dispensa de Ajuda de Custo</h5></center>
					    	<br><br>
					    	<a href="http://localhost/ProjExtensao/documentos/DispensaAjudaCusto.pdf" class="btn btn-login" target="_blank" style="float: right; color: white">Vizualizar</a>
					  	</div>
					</div> &nbsp; &nbsp;
					<div class="card mb-4 shadow-sm" style="width: 20rem;">
					  	<img class="card-img-top" src="./img/transporte.PNG" alt="Card image cap">
					  	<div class="card-body">
					    	<center><h5 class="card-title">Termo de Responsabilidade de Veículo Próprio</h5></center>
					    	<a href="http://localhost/ProjExtensao/documentos/TermoTransporte.pdf" class="btn btn-login" target="_blank" style="float: right; color: white">Vizualizar</a>
					  	</div>
					</div>&nbsp; &nbsp;
					<div class="card mb-4 shadow-sm" style="width: 20rem;">
					  	<img class="card-img-top" src="./img/declaracao.PNG" alt="Card image cap">
					  	<div class="card-body">
					    	<center><h5 class="card-title">Declaração de Participação em Visita Técnica</h5></center>
					    	<a href="http://localhost/ProjExtensao/documentos/DeclaraçãoParticipacao.pdf" target="_blank" class="btn btn-login" style="float: right; color: white">Vizualizar</a>
					  	</div>
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