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
				<article> Formulário de Cadastro do Bolsista/Voluntário </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> <b> Formulário de Cadastro do Bolsista/Voluntário </b> </h1>
		    <?php if($msg=="sucesso"): ?>
		    	<p style="color: red"> Bolsista cadastrado com sucesso! </p>
		    <?php else: ?>
        		<div class="col-lg-12 card-container">
          			<div class="card">
            			<div class="card-body">
            				<form enctype="multipart/form-data" method="POST" action="inExtensao.php" name="enviarDados">
            					<div class="row">
                  					<div class="col-md-12 col-xs-12">
                    					<div class="form-group">
						                    <label for="nomeProjeto" style="font-family: Verdana;" id="nomeProjeto">Modalidade do Projeto</label> 
						                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
						                        ?
						                    </button>
                      						<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="categoria" name="categoria">
						                        <option selected="" value="sel">Selecione</option>
						                        <option value="curso">PIBIC</option>
						                        <option value="evento">PIBITI</option>
						                        <option value="evento">PIBIC-JR</option>
						                        <option value="evento">Voluntário de Pesquisa</option>
						                        <option value="evento">PIBEX</option>
						                        <option value="evento">PIBEX-JR</option>
						                        <option value="evento">PIBEX-PIE</option>
						                        <option value="evento">PIBEX-JR-PIEL</option>
						                        <option value="evento">Voluntário de Extensão</option>
                      						</select>
                    					</div>
                  					</div>
                				</div>
                				<div class="row">
                  					<div class="col-md-12 col-xs-12">
                    					<div class="form-group">
                      						<label for="categoria" style="font-family: Verdana;" id="categoria">Título do Projeto</label>
                      						<input type="text" name="cargaHoraria" class="form-control" required="" id="cargaHoraria">
                    					</div>
                  					</div>
                  				</div>
                					<div class="row">
                  						<div class="col-md-12 col-xs-12">
                    						<div class="form-group">
                      							<label for="dataInicio" style="font-family: Verdana;" id="dataInicio">Pesquisador/Orientador</label>
                      							<input type="text" name="dataInicio" class="form-control" required="" id="dataInicio">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-12 col-xs-12">
                    						<div class="form-group">
                      							<label for="qtdvagas" style="font-family: Verdana;" id="qtdvagas">Nome do Aluno</label>
                      							<input type="text" name="qtdvagas" class="form-control" required="" id="qtdvagas">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
							                    <label for="assocProg" style="font-family: Verdana;" id="assocProg">Curso</label>
							                    <input type="text" name="qtdvagas" class="form-control" required="" id="qtdvagas">
                    						</div>
                  						</div>
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
                      							<label for="prog" style="font-family: Verdana;" id="prog">Período</label>
                      							<input type="text" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
                      							<label for="prog" style="font-family: Verdana;" id="prog">Matrícula</label>
                      							<input type="text" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
							                    <label for="cnpq" style="font-family: Verdana;" id="cnpq">Telefone Residencial</label>
							                    <input type="number" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
							                    <label for="cnpq" style="font-family: Verdana;" id="cnpq">Celular</label>
							                    <input type="number" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="areaT" style="font-family: Verdana;" id="areaT">Email</label>
                      							<input type="email" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="responsaveis" style="font-family: Verdana;" id="responsaveis"> CPF</label>
                      							<input type="number" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
							                    <label for="assocProg" style="font-family: Verdana;" id="assocProg">Banco</label>
							                    <input type="text" name="qtdvagas" class="form-control" required="" id="qtdvagas">
                    						</div>
                  						</div>
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
                      							<label for="prog" style="font-family: Verdana;" id="prog">Agência</label>
                      							<input type="text" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                  						<div class="col-md-4 col-xs-4">
                    						<div class="form-group">
                      							<label for="prog" style="font-family: Verdana;" id="prog">Conta Corrente</label>
                      							<input type="text" name="prog" class="form-control" id="prog">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                						<div class="col-md-12 col-xs-12">
                							<small id="notaAnexo" class="form-text text-muted" > As informações acima são de preenchimento exclusivo dos bolsistas remunerados. </small> <br>
                						</div>
                					</div>
                  				<input type="submit" class="btn btn-lg btn-login btn-block" value="Enviar"> <br>
                  				<center><p>Ao clicar em Enviar, você concorda com os nossos <a href="normas.php" target="_blank">Termos</a>.
                        		<hr class="md-2">
                        		<center><p> Sua proposta será recebida e avaliada em até de 30 dias úteis. </p> </center>
            				</form>
            			</div>
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