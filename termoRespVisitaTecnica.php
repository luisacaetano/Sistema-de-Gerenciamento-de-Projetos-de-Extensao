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
				<article>Termo de Responsabilidade e Normas Disciplinares para Visitas Técnicas/Participação em Eventos Sem Apresentação de Trabalho </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"><b> Termo de Responsabilidade de Visita Técnica </b> </h1>
			<br>
			<p style="text-align: justify; font-family: Verdana; ">&nbsp; &nbsp; &nbsp; A viagem tem como objetivo principal a complementação didático-pedagógica de disciplinas teórico-práticas dos cursos do IFMG – Campus Formiga e também promover a integração entre os alunos. Para garantir a integridade de todos e o máximo aproveitamento desta atividade, cada aluno concordará em cumprir todas as regras propostas assinando o presente termo.
			<br><br>
			<b>1. </b> Não será admitido nenhum tipo de indisciplina durante a atividade, estando o(a) aluno(a) sujeito a punições disciplinares. <br>
			<b>2. </b> O(a) aluno(a) não poderá se separar do grupo durante a viagem de visita técnica para realizar atividades particulares. <br>
			<b>3. </b> Os horários estipulados de início e término das atividades deverão ser respeitados com rigor, inclusive os horários de saída e retorno do ônibus. Os alunos que não estiverem no local na data e horários previamente combinados, estarão sujeitos à perda do transporte e do valor pago antecipadamente, ficando a critério do(a) professor(a) responsável, qualquer tipo de decisão. <br>
			<b>4. </b> . O(a) aluno(a) deverá comparecer a todas as atividades no horário pré-determinado. Se alguma doença ou motivo de força maior impedi-lo de participar, deverá comunicar ao(a) professor(a) responsável o mais brevemente possível. <br>
			<b>5. </b> Aos(as) alunos(as), é terminantemente proibido consumir quaisquer substâncias nocivas durante a viagem e as atividades de grupo. Em caso de desrespeito a este item, serão tomadas medidas legais e cabíveis perante o regimento da Instituição e as Leis do Código Penal. <br>
			<b>6. </b> O(a) aluno(a) será responsável pela reposição ou pagamento de qualquer objeto quebrado, danificado, ou desaparecido do ônibus, estabelecimento hoteleiro ou local visitado. <br>
			<b>7. </b> Não será permitido ao(a) aluno(a) levar pessoas estranhas ao grupo, namorado(a), amigo(a), etc. <br>
			<b>8. </b> A condução de quaisquer decisões que tenham que ser tomadas diante de algum transtorno, será feita pelo(a) professor(a) responsável. <br>
			<b>9. </b> O cumprimento das normas acima estipuladas será observado com rigor pelo(a) professor(a) responsável, juntamente com o(a) coordenador(a) do curso e a SEPPG. Em casos extremos ou reincidentes, nos quais as advertências verbais feitas não tenham sido acatadas, o(a) aluno(a) será advertido oficialmente. <br> <br>
			<b>&nbsp; &nbsp; &nbsp; Declaro estar ciente das normas supracitadas e me comprometo a respeitá-las.</b>
			</p>
			<a href="formRespVisitaTecn.php" class="btn btn-lg btn-block btn-login" style="color: white;"> Aceitar e Continuar</a>
			<br><center><p>Ao clicar em Continuar, você concorda com os nossos <a href="termoRespVisitaTecnica.php">Termos de Responsabilidade</a> e está ciente de todas as regras refentes à viagem.</p> </center>
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