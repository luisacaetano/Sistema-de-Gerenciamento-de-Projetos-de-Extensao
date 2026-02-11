<?php
	session_start(); 
	include_once("conn.php"); 
	$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$result="SELECT * FROM extensao WHERE CODEXTENSAO='$id'"; 
	$resultado=mysqli_query($conexao,$result); 
	$row_extensao=mysqli_fetch_assoc($resultado); 
	
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
						<a href="status.php" class="nav-link" style="color: #fff;"> Status </a>
					</li>
					<li>
						<a href="bolsas.php" class="nav-link" style="color: #fff;"> Bolsas </a>
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
				<article> Cadastro de Curso e Evento de Extensão </article>
			</div>
		</div>
	</div>
	<!-- Fim da Barra de Informação --> 

	<!-- Cadastro de Cursos --> 
	<div class="container">
		<section class="jumbotron">
			<h1 style="text-align: center; font-family: Verdana;"> <b> Curso e Evento de Extensão </b> </h1>
		    <?php if($msg=="sucesso"): ?>
		    	<p style="color: red"> Curso/Evento de Extensão atualizado com sucesso! </p>
		    <?php else: ?>
		    	<p style="text-align: center; font-family: Verdana; color: blue;"> Caso o seu projeto esteja dentro do nosso <a href="normas.php" target="_blank"><u>Edital de Cadastro</u></a>,<br> preencha nosso formulário para submetê-lo à avaliação.</p>
        		<div class="col-lg-12 card-container">
          			<div class="card">
            			<div class="card-body">
            				<form enctype="multipart/form-data" method="POST" action="edProjeto.php" name="enviarDados">
            					<div class="row">
                  					<div class="col-md-12 col-xs-12">
                    					<div class="form-group">
						                    <label for="nomeProjeto" style="font-family: Verdana;" id="nomeProjeto">Nome do Projeto </label> 
						                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
						                        ?
						                    </button>
                      						<input type="text" name="nomeProjeto" class="form-control" required="" id="nomeProjeto" value="<?php echo $row_extensao['NOMEPROJETO']; ?>">
                    					</div>
                  					</div>
                				</div>
                				<div class="row">
                  					<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="categoria" style="font-family: Verdana;" id="categoria">Categoria</label>
                      						<input type="text" name="nomeProjeto" class="form-control" required="" id="nomeProjeto" value="<?php echo $row_extensao['CATEGORIA']; ?>">
                    					</div>
                  					</div>
                  					<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="cargaHoraria" style="font-family: Verdana;" id="cargaHoraria">Carga-Horária</label>
							                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira a carga-horária total do curso/evento a ser desenvolvido" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
							                        ?
							                    </button>
                      							<input type="number" name="cargaHoraria" class="form-control" required="" id="cargaHoraria" value="<?php echo $row_extensao['CARGAHORARIA']; ?>">
                    						</div>
                  						</div>
                					</div> <!--
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="dataInicio" style="font-family: Verdana;" id="dataInicio">Data de Início</label>
                      							<input type="date" name="dataInicio" class="form-control" required="" id="dataInicio">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="previsaoTermino" style="font-family: Verdana;" id="previsaoTermino">Previsão de Término</label>
                      							<input type="date" name="previsaoTermino" class="form-control" required="" id="previsaoTermino">
                    						</div>
                  						</div>
                					</div> --> 
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="qtdvagas" style="font-family: Verdana;" id="qtdvagas">Quantidade de Vagas</label>
                      							<input type="number" name="qtdvagas" class="form-control" required="" id="qtdvagas" value="<?php echo $row_extensao['QTDVAGAS']; ?>">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="qtdvagasExt" style="font-family: Verdana;" id="qtdvagasExt">Vagas para a Comunidade Externa</label>
                      							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira a quantide de vagas que foram reservadas para a comunidade externa" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                     						 	</button>
                      							<input type="number" name="qtdvagasExt" class="form-control" required="" id="qtdvagasExt" value="<?php echo $row_extensao['VAGASEXTERNO']; ?>">
                    						</div>
                  						</div>
                					</div> <!--
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
							                    <label for="assocProg" style="font-family: Verdana;" id="assocProg">Associado a algum Projeto/Programa?</label>
							                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="assocProg" id="assocProg" required="">
							                    	<option selected="" value="sel">Selecione</option>
							                        <option value="Sim">Sim</option>
							                        <option value="Não">Não</option>
							                    </select>
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="prog" style="font-family: Verdana;" id="prog">Qual?</label>
                      							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Campo opcional" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                      							</button>
                      							<input type="text" name="prog" class="form-control" id="prog" value="<?php echo $row_extensao['ASSOCIADORESP']; ?>">
                    						</div>
                  						</div>
                					</div> 
                					<div class="row">
                  						<div class="col-md-12 col-xs-12">
                    						<div class="form-group">
							                    <label for="cnpq" style="font-family: Verdana;" id="cnpq">Grande área de conhecimento do CNPQ</label>
							                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="cnpq" name="cnpq">
							                    	<option selected="" value="sel">Selecione</option>
							                    </select>
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="areaT" style="font-family: Verdana;" id="areaT">Área Temática da Ação de Extensão</label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="areaT" name="areaT">
                        							<option selected="" value="sel"> Selecione </option>
							                        <option value="comunicacao"> Comunicação </option>
							                        <option value="cultura"> Cultura </option>
							                        <option value="direitosH"> Direitos Humanos e Justiça </option>
							                        <option value="educacao"> Educação </option>
							                        <option value="meioam"> Meio-Ambiente</option>
							                        <option value="saude"> Saúde </option>
							                        <option value="tecnolo"> Tecnologia e Produção </option>
							                        <option value="trab"> Trabalho </option>
                      							</select>
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="linhaE" style="font-family: Verdana;" id="linhaE">Linha de Extensão</label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="linhaE" name="linhaE">
							                        <option selected="" value="sel"> Selecione </option>
							                        <option value="1"> Alfabetização: Leitura e Escrita </option>
							                        <option value="2"> Artes Cênicas </option>
							                        <option value="3"> Artes Integradas </option>
							                        <option value="4"> Artes Plásticas </option>
							                        <option value="5"> Artes Visuais </option>
							                        <option value="6"> Comunicação Estratégica </option>
							                        <option value="7"> Desenvolvimento de Produtos </option>
							                        <option value="8"> Desenvolvimento Regional </option>
							                        <option value="9"> Desenvolvimento Rural e Questões Agrárias </option>
							                        <option value="10"> Desenvolvimento Tecnológico </option>
							                        <option value="11"> Desenvolvimento Urbano </option>
							                        <option value="12"> Direitos Individuais e Coletivos </option>
							                        <option value="13"> Educação Profissional </option>
							                        <option value="14"> Empreendedorismo </option>
							                        <option value="15"> Emprego e Renda </option>
							                        <option value="16"> Endemias e Epidemias </option>
							                        <option value="17"> Espaços de Ciências </option>
							                        <option value="18"> Esporte e Lazer </option>
							                        <option value="19"> Estilismo </option>
							                        <option value="20"> Fármacos e Medicamentos </option>
							                        <option value="21"> Formação de Professores </option>
							                        <option value="22"> Gestão de Trabalho </option>
							                        <option value="23"> Gestão Informacional </option>
							                        <option value="24"> Gestão Institucional </option>
							                        <option value="25"> Gestão Pública </option>
							                        <option value="26"> Grupos Sociais Vulneráveis </option>
							                        <option value="27"> Infância e Adolescência </option>
							                        <option value="28"> Inovação Tecnológica </option>
							                        <option value="29"> Jornalismo </option>
							                        <option value="30"> Jovens e Adultos </option>
							                        <option value="31"> Línguas Estrangeiras </option>
							                        <option value="32"> Metodologias e Estratégias de Ensino/Aprendizado </option>
							                        <option value="33"> Mídia-Artes </option>
							                        <option value="34"> Mídias </option>
							                        <option value="35"> Música </option>
							                        <option value="36"> Organizações da Sociedade e Movimentos Sociais e Populares </option>
							                        <option value="37"> Patrimônio Cultural, Histórico e Natural </option>
							                        <option value="38"> Pessoas com Deficiência, Incapacidades e Necessidades Especiais </option>
							                        <option value="39"> Propriedade Intelectual e Patente </option>
							                        <option value="40"> Questões Ambientais </option>
							                        <option value="41"> Recursos Hídricos </option>
							                        <option value="42"> Resíduos Sólidos </option>
							                        <option value="43"> Saúde Animal </option>
							                        <option value="44"> Saúde da Família </option>
							                        <option value="45"> Saúde e Proteção no Trabalho </option>
							                        <option value="46"> Saúde Humana </option>
							                        <option value="47"> Segurança Alimentar e Nutricional </option>
							                        <option value="48"> Segurança Pública e Defesa Social </option>
							                        <option value="49"> Tecnologia da Informação </option>
							                        <option value="50"> Temas Específicos/Desenvolvimento Humano </option>
							                        <option value="51"> Terceira Idade </option>
							                        <option value="52"> Turismo </option>
							                        <option value="53"> Uso de Drogas e Dependência Química </option>
                      							</select>
                    						</div>
                  						</div>
                					</div> -->
                					<div class="row">
                  						<div class="col-md-12 col-xs-12">
                    						<div class="form-group">
                      							<label for="responsaveis" style="font-family: Verdana;" id="responsaveis"> Responsáveis</label>
                      							<textarea class="form-control" rows="2" name="responsaveis" id="responsaveis" required=""> <?php echo $row_extensao['RESPONSAVEIS']; ?></textarea> 
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                    					<div class="col-md-12 col-xs-12">
                      						<div class="form-group">
                        						<label for="desc" style="font-family: Verdana;" id="desc">Descrição da Ação e Justificativa </label> 
                        						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva a ação proposta abordando a justificativa da oferta. Esclareça a importância do curso/evento para a comunidade local. Informe suas parcerias, formas de divulgação e, se possível, explicite a relação do curso/evento com os demais ofertados pela instituição" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        						</button>
                        						<textarea class="form-control" rows="3" name="desc" id="desc" required=""> <?php echo $row_extensao['DESCRICAO']; ?> </textarea>
                      						</div>
                    					</div>
                  					</div>
                  					<div class="row">
                    					<div class="col-md-6 col-xs-6">
                      						<div class="form-group">
                        						<label for="objetivosG" style="font-family: Verdana;" id="objetivosG">Objetivos Gerais</label>
                        						<textarea class="form-control" rows="2" name="objetivosG" id="objetivosG" required=""> <?php echo $row_extensao['OBJGERAIS']; ?> </textarea>
                      						</div>
                    					</div>
                    					<div class="col-md-6 col-xs-6">
                      						<div class="form-group">
                        						<label for="objetivosE" style="font-family: Verdana;" id="objetivosE">Objetivos Específicos</label>
                        						<textarea class="form-control" rows="2" id="objetivosE" name="objetivosE" required=""> <?php echo $row_extensao['OBJESPECIFICOS']; ?> </textarea>
                      						</div>
                    					</div>
                  					</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="publicoAlvo" style="font-family: Verdana;" id="publicoAlvo">Público-Alvo</label>
                        					<textarea class="form-control" rows="1" name="publicoAlvo" id="publicoAlvo" required=""> <?php echo $row_extensao['PUBLICOALVO']; ?> </textarea>
                      					</div>
                    				</div>
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="preRequisitos" style="font-family: Verdana;" id="preRequisitos">Pré-requisitos e mecanismos de acesso para participação</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Explicite os pré-requisitos de acesso ao curso/evento, como idade, escolaridade e outros. Explicite os mecanismos de acesso ao curso/evento (processo seletivo/inscrições)" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="3" name="preRequisitos" id="preRequisitos" required=""> <?php echo $row_extensao['PREREQUISITOS']; ?> </textarea>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="metodologia" style="font-family: Verdana;" id="metodologia">Metodologia e Avaliação da Ação e dos Participantes</label>
                        					<textarea class="form-control" rows="2" name="metodologia" id="metodologia" required="">  <?php echo $row_extensao['METODOLOGIA']; ?> </textarea>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="recursos" style="font-family: Verdana;" id="recursos">Recursos e Infraestrutura Necessária </label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descreva os recursos didáticos que serão utilizados. Descreva a infra-estrutura física necessária (laboratórios, salas de aula, biblioteca)" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="2" id="recursos" name="recursos" required=""> <?php echo $row_extensao['RECURSOS']; ?> </textarea>
                      					</div>
                    				</div>
                  				</div> <!-- 
                  				<div class="row">
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<label for="nomeEquipe1" style="font-family: Verdana;" id="nomeEquipe1">Equipe de Execução</label>
                        					<input type="text" name="nomeEquipe1" class="form-control" placeholder="Nome" id="nomeEquipe1" required="" value="<?php echo $row_extensao['NOME_EE1']; ?>">
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<label for="categoriaEquipe1" style="font-family: Verdana; color: white;" id="categoriaEquipe1">Equipe de Execução</label>
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="categoriaEquipe1" name="categoriaEquipe1">
						                        <option selected="" value="sel">Categoria</option>
						                        <option value="Docente">Docente</option>
						                        <option value="Técnico Administrativo">Técnico Administrativo</option>
						                        <option value="Discente">Discente (Curso)</option>
						                        <option value="Colaborador Externo">Colaborador Externo</option>
                        					</select>
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<label for="funcaoEquipe1" style="font-family: Verdana; color: white;" id="funcaoEquipe1">Equipe de Execução</label>
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="funcaoEquipe1" id="funcaoEquipe1">
						                        <option selected="" value="sel">Função</option>
						                        <option value="Coordenador">Coordenador</option>
						                        <option value="Co-coordenador">Co-coordenador</option>
						                        <option value="Monitor">Monitor</option>
                        					</select>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<input type="text" name="nomeEquipe2" class="form-control" placeholder="Nome" id="nomeEquipe2" required="" value="<?php echo $row_extensao['NOME_EE2']; ?>">
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="categoriaEquipe2" id="categoriaEquipe2">
					                          	<option selected="" value="sel">Categoria</option>
					                          	<option value="Docente">Docente</option>
					                          	<option value="Técnico Administrativo">Técnico Administrativo</option>
					                          	<option value="Discente">Discente (Curso)</option>
					                          	<option value="Colaborador Externo">Colaborador Externo</option>
                        					</select>
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="funcaoEquipe2" id="funcaoEquipe2">
                          						<option selected="" value="sel">Função</option>
                          						<option value="Coordenador">Coordenador</option>
                          						<option value="Co-coordenador">Co-coordenador</option>
                          						<option value="Monitor">Monitor</option>
                        					</select>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<input type="text" name="nomeEquipe3" class="form-control" placeholder="Nome" id="nomeEquipe3" required="" value="<?php echo $row_extensao['NOME_EE3']; ?>">
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="categoriaEquipe3" name="categoriaEquipe3" required="">
						                        <option selected="" value="sel">Categoria</option>
						                        <option value="Docente">Docente</option>
						                        <option value="Técnico Administrativo">Técnico Administrativo</option>
						                        <option value="Discente">Discente (Curso)</option>
						                        <option value="Colaborador Externo">Colaborador Externo</option>
                        					</select>
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="funcaoEquipe3" name="funcaoEquipe3">
					                         	<option selected="" value="sel">Função</option>
					                          	<option value="Coordenador">Coordenador</option>
					                          	<option value="Co-coordenador">Co-coordenador</option>
					                          	<option value="Monitor">Monitor</option>
                        					</select>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<input type="text" name="nomeEquipe4" class="form-control" placeholder="Nome" id="nomeEquipe4" required="" value="<?php echo $row_extensao['NOME_EE4']; ?>">
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="categoriaEquipe4" id="categoriaEquipe4">
					                          	<option selected="" value="sel">Categoria</option>
					                          	<option value="Docente">Docente</option>
					                          	<option value="Técnico Administrativo">Técnico Administrativo</option>
					                          	<option value="Discente">Discente (Curso)</option>
					                          	<option value="Colaborador Externo">Colaborador  Externo</option>
                        					</select>
                      					</div>
                    				</div>
                    				<div class="col-md-4 col-xs-4">
                      					<div class="form-group">
                        					<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="funcaoEquipe4" id="funcaoEquipe4">
					                          	<option selected="" value="sel">Função</option>
					                          	<option value="Coordenador">Coordenador</option>
					                          	<option value="Co-coordenador">Co-coordenador</option>
					                          	<option value="Monitor">Monitor</option>
                        					</select>
                      					</div>
                    				</div>
                  				</div> 
                  				<div class="row">
                  					<div class="col-xs-6 col-md-6">
                      					<div class="form-group">
                        					<label for="estado" style="font-family: Verdana;" id="estado">Estado</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Estado atual, na qual você está acessando" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="text" name="estado" class="form-control" id="estado" required="" value="<?php echo $row_extensao['ESTADO']; ?>">
                     					</div>
                    				</div>
                    				<div class="col-md-6 col-xs-6">
                      					<div class="form-group">
                        					<label for="cidade" style="font-family: Verdana;" id="cidade">Cidade</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Cidade atual, na qual você está acessando" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="text" name="cidade" class="form-control" id="cidade" required="" value="<?php echo $row_extensao['CIDADE']; ?>">
                      					</div>
                    				</div>
                				</div> 
                				<div class="row">
                					<div class="col-xs-6 col-md-6">
                      					<div class="form-group">
                        					<label for="dataA" style="font-family: Verdana;" id="dataA">Data</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Data atual" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="date" name="dataA" class="form-control" id="dataA" required="">
                     					</div>
                    				</div>
                					<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="arquivo" style="font-family: Verdana;" id="arquivo"> Anexar Imagem </label>
                      						<input type="file" name="arquivo" class="form-control-file" required="" id="arquivo" />
											<small id="notaAnexo" class="form-text text-muted"> Envie uma imagem em anexo. </small>
                    					</div>
                  					</div>
                				</div> --> 
                  				<input type="submit" class="btn btn-lg btn-login btn-block" value="Salvar"> <br>
                  				<center><p>Ao clicar em Salvar, você concorda com os nossos <a href="normas.php" target="_blank">Termos</a>.
                        		<hr class="md-2">
                        		<center><p> Sua proposta será reenviada e avaliada em até de 30 dias úteis. </p> </center>
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