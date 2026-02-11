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
		    	<p style="color: red"> Curso/Evento de Extensão cadastrado com sucesso! </p>
		    <?php else: ?>
		    	<p style="text-align: center; font-family: Verdana; color: blue;"> Caso o seu projeto esteja dentro do nosso <a href="normas.php" target="_blank"><u>Edital de Cadastro</u></a>,<br> preencha nosso formulário para submetê-lo à avaliação.</p>
        		<div class="col-lg-12 card-container">
          			<div class="card">
            			<div class="card-body">
            				<form enctype="multipart/form-data" method="POST" action="inExtensao.php" name="enviarDados">
            					<div class="row">
                  					<div class="col-md-12 col-xs-12">
                    					<div class="form-group">
						                    <label for="nomeProjeto" style="font-family: Verdana;" id="nomeProjeto">Título do Projeto </label> 
						                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Texto em tooltip para botão de ação" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
						                        ?
						                    </button>
                      						<input type="text" name="nomeProjeto" class="form-control" required="" id="nomeProjeto">
                    					</div>
                  					</div>
                				</div>
                				<div class="row">
                  					<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="categoria" style="font-family: Verdana;" id="categoria">Categoria</label>
                      						<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="categoria" name="categoria">
						                        <option selected="" value="sel">Selecione</option>
						                        <option value="Curso de Extensão">Curso de Extensão</option>
						                        <option value="Evento de Extensão">Evento de Extensão</option>			                        
						                        <option value="Prestação de Serviço">Prestação de Serviço</option>	                        
						                        <option value="Programa de Extensão">Programa de Extensão</option>
						                        <option value="Projeto de Extensão">Projeto de Extensão</option>
                      						</select>
                    					</div>
                  					</div>
                  					<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="acao" style="font-family: Verdana;" id="acao"> Tipo de Ação </label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="acao" name="acao">
							                        <option selected="" value="sel"> Selecione </option>
							                        <option value="Acompanhamento de Egressos"> Acompanhamento de Egressos </option>
							                        <option value="Empresas Juniores"> Empresas Juniores </option>
							                        <option value="Formento ao Estágio e Emprego"> Formento ao Estágio e Emprego </option>
							                        <option value="Grupos de Estudo"> Grupos de Estudo </option>
							                        <option value="Incentivo à Cultura Esporte e Lazer"> Incentivo à Cultura Esporte e Lazer </option>
							                        <option value="Visitas Técnicas"> Visitas Técnicas </option>	                        
							                    </select>
							                </div>
							            </div>
                					</div>
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
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="qtdvagas" style="font-family: Verdana;" id="qtdvagas">Quantidade de Vagas</label>
                      							<input type="number" name="qtdvagas" class="form-control" required="" id="qtdvagas">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="vagasExterno" style="font-family: Verdana;" id="vagasExterno">Vagas para a Comunidade Externa</label>
                      							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira a quantide de vagas que foram reservadas para a comunidade externa" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                     						 	</button>
                      							<input type="number" name="vagasExterno" class="form-control" required="" id="vagasExterno">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
							                    <label for="associado" style="font-family: Verdana;" id="associado">Associado a algum Projeto/Programa?</label>
							                    <select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" name="associado" id="associado" required="">
							                    	<option selected="" value="sel">Selecione</option>
							                        <option value="Sim">Sim</option>
							                        <option value="Não">Não</option>
							                    </select>
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="associadoResp" style="font-family: Verdana;" id="associadoResp">Qual?</label>
                      							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Campo opcional" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                      							</button>
                      							<input type="text" name="associadoResp" class="form-control" id="associadoResp">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="areaTematica" style="font-family: Verdana;" id="areaTematica">Área Temática da Ação de Extensão</label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="areaTematica" name="areaTematica">
                        							<option selected="" value="sel"> Selecione </option>
							                        <option value="Comunicação"> Comunicação </option>
							                        <option value="Cultura"> Cultura </option>
							                        <option value="Direitos Humanos e Justiça"> Direitos Humanos e Justiça </option>
							                        <option value="Educação"> Educação </option>
							                        <option value="Meio-Ambiente"> Meio-Ambiente</option>
							                        <option value="Saúde"> Saúde </option>
							                        <option value="Tecnologia e Produção"> Tecnologia e Produção </option>
							                        <option value="Trabalho"> Trabalho </option>
                      							</select>
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="linhaExtensao" style="font-family: Verdana;" id="linhaExtensao">Linha de Extensão</label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="linhaExtensao" name="linhaExtensao">
							                        <option selected="" value="sel"> Selecione </option>
							                        <option value="Alfabetização: Leitura e Escrita"> Alfabetização: Leitura e Escrita </option>
							                        <option value="Artes Cênicas"> Artes Cênicas </option>
							                        <option value="Artes Integradas"> Artes Integradas </option>
							                        <option value="Artes Plásticas"> Artes Plásticas </option>
							                        <option value="Artes Visuais"> Artes Visuais </option>
							                        <option value="Comunicação Estratégica"> Comunicação Estratégica </option>
							                        <option value="Desenvolvimento de Produtos"> Desenvolvimento de Produtos </option>
							                        <option value="Desenvolvimento Regional"> Desenvolvimento Regional </option>
							                        <option value="Desenvolvimento Rural e Questões Agrárias"> Desenvolvimento Rural e Questões Agrárias </option>
							                        <option value="Desenvolvimento Tecnológico"> Desenvolvimento Tecnológico </option>
							                        <option value="Desenvolvimento Urbano"> Desenvolvimento Urbano </option>
							                        <option value="Direitos Individuais e Coletivos"> Direitos Individuais e Coletivos </option>
							                        <option value="Educação Profissional"> Educação Profissional </option>
							                        <option value="Empreendedorismo"> Empreendedorismo </option>
							                        <option value="Emprego e Renda"> Emprego e Renda </option>
							                        <option value="Endemias e Epidemias"> Endemias e Epidemias </option>
							                        <option value="Espaços de Ciências"> Espaços de Ciências </option>
							                        <option value="Esporte e Lazer"> Esporte e Lazer </option>
							                        <option value="Estilismo"> Estilismo </option>
							                        <option value="Fármacos e Medicamentos"> Fármacos e Medicamentos </option>
							                        <option value="Formação de Professores"> Formação de Professores </option>
							                        <option value="Gestão de Trabalho"> Gestão de Trabalho </option>
							                        <option value="Gestão Informacional"> Gestão Informacional </option>
							                        <option value="Gestão Institucional"> Gestão Institucional </option>
							                        <option value="Gestão Pública"> Gestão Pública </option>
							                        <option value="Grupos Sociais Vulneráveis"> Grupos Sociais Vulneráveis </option>
							                        <option value="Infância e Adolescência"> Infância e Adolescência </option>
							                        <option value="Inovação Tecnológica"> Inovação Tecnológica </option>
							                        <option value="Jornalismo"> Jornalismo </option>
							                        <option value="Jovens e Adultos"> Jovens e Adultos </option>
							                        <option value="Línguas Estrangeiras"> Línguas Estrangeiras </option>
							                        <option value="Metodologias e Estratégias de Ensino/Aprendizado"> Metodologias e Estratégias de Ensino/Aprendizado </option>
							                        <option value="Mídia-Artes"> Mídia-Artes </option>
							                        <option value="Mídias"> Mídias </option>
							                        <option value="Música"> Música </option>
							                        <option value="Organizações da Sociedade e Movimentos Sociais e Populares"> Organizações da Sociedade e Movimentos Sociais e Populares </option>
							                        <option value="Patrimônio Cultural, Histórico e Natural"> Patrimônio Cultural, Histórico e Natural </option>
							                        <option value="Pessoas com Deficiência, Incapacidades e Necessidades Especiais"> Pessoas com Deficiência, Incapacidades e Necessidades Especiais </option>
							                        <option value="Propriedade Intelectual e Patente "> Propriedade Intelectual e Patente </option>
							                        <option value="Questões Ambientais"> Questões Ambientais </option>
							                        <option value="Recursos Hídricos"> Recursos Hídricos </option>
							                        <option value="Resíduos Sólidos"> Resíduos Sólidos </option>
							                        <option value="Saúde Animal"> Saúde Animal </option>
							                        <option value="Saúde da Família"> Saúde da Família </option>
							                        <option value="Saúde e Proteção no Trabalho"> Saúde e Proteção no Trabalho </option>
							                        <option value="Saúde Humana"> Saúde Humana </option>
							                        <option value="Segurança Alimentar e Nutricional "> Segurança Alimentar e Nutricional </option>
							                        <option value="Segurança Pública e Defesa Social"> Segurança Pública e Defesa Social </option>
							                        <option value="Tecnologia da Informação "> Tecnologia da Informação </option>
							                        <option value="Temas Específicos/Desenvolvimento Humano"> Temas Específicos/Desenvolvimento Humano </option>
							                        <option value="Terceira Idade"> Terceira Idade </option>
							                        <option value="Turismo"> Turismo </option>
							                        <option value="Uso de Drogas e Dependência Química"> Uso de Drogas e Dependência Química </option>
                      							</select>
                    						</div>
                  						</div>
                					</div> 
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="ods" style="font-family: Verdana;" id="ods"> Indicação do Objetivo de Desenvolvimento Sustentável </label>
                      							<select class="form-control" data-size="5" data-live-search="true" data-width="100%" required="" id="ods" name="ods">
							                        <option selected="" value="sel"> Selecione </option>
							                        <option value="Objetivo 1: Erradicação da Pobreza"> Objetivo 1: Erradicação da Pobreza </option>
							                        <option value="Objetivo 2: Fome Zero e Agricultura Sustentável"> Objetivo 2: Fome Zero e Agricultura Sustentável </option>
							                        <option value="Objetivo 3: Saúde e Bem-Estar"> Objetivo 3: Saúde e Bem-Estar </option>
							                        <option value="OObjetivo 4: Educação de Qualidade"> Objetivo 4: Educação de Qualidade </option>
							                        <option value="Objetivo 5: Igualdade de Gênero"> Objetivo 5: Igualdade de Gênero </option>
							                        <option value="Objetivo 6: Água Potável e Saneamento"> Objetivo 6: Água Potável e Saneamento </option>
							                        <option value="Objetivo 7: Energia Limpa e Acessível"> Objetivo 7: Energia Limpa e Acessível </option>
							                        <option value="Objetivo 8: Trabalho Decente e Crescimento Econômico"> Objetivo 8: Trabalho Decente e Crescimento Econômico</option>
							                        <option value="Objetivo 9: Indústria, Inovação e Infraestrutura"> Objetivo 9: Indústria, Inovação e Infraestrutura </option>
							                        <option value="Objetivo 10: Redução das Desigualdades"> Objetivo 10: Redução das Desigualdades </option>
							                        <option value="Objetivo 11: Cidades e Comunidades Sustentáveis"> Objetivo 11: Cidades e Comunidades Sustentáveis </option>
							                        <option value="Objetivo 12: Consumo e Produções Responsáveis"> Objetivo 12: Consumo e Produções Responsáveis </option>
							                        <option value="Objetivo 13: Ação Contra a Mudança Global do Clima"> Objetivo 13: Ação Contra a Mudança Global do Clima </option>
							                        <option value="Objetivo 14: Vida na Água"> Objetivo 14: Vida na Água </option>
							                        <option value="Objetivo 15: Vida Terrestre"> Objetivo 15: Vida Terrestre</option>
							                        <option value="Objetivo 16: Paz, Justiça e Instituições Eficazes"> Objetivo 16: Paz, Justiça e Instituições Eficazes</option>
							                        <option value="Objetivo 17: Parcerias e Meios de Implementação"> Objetivo 17: Parcerias e Meios de Implementação </option>
							                    </select>
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="cargaHoraria" style="font-family: Verdana;" id="cargaHoraria">Carga-Horária</label>
							                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Insira a carga-horária total do curso/evento a ser desenvolvido" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;">
							                        ?
							                    </button>
                      							<input type="number" name="cargaHoraria" class="form-control" required="" id="cargaHoraria">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="orientador" style="font-family: Verdana;" id="orientador"> Nome do Orientador</label>
                      							<input type="text" name="orientador" class="form-control" required="" id="orientador">
                    						</div>
                  						</div>
                  						<div class="col-md-6 col-xs-6">
                    						<div class="form-group">
                      							<label for="coorientador" style="font-family: Verdana;" id="coorientador"> Nome do Coorientador</label>
                      							<input type="text" name="coorientador" class="form-control" required="" id="coorientador">
                    						</div>
                  						</div>
                					</div>
                					<div class="row">
                    					<div class="col-md-12 col-xs-12">
                      						<div class="form-group">
                        						<label for="resumo" style="font-family: Verdana;" id="resumo">Resumo </label> 
                        						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="O resumo deverá limitar-se a 300 palavras, contendo uma contextualização a respeito do tema a ser abordado, situando o leitor no contexto a ser investigado. Também deverá apresentar justificativa para a relevância do trabalho, os objetivos e a metodologia a ser utilizada." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        						</button>
                        						<textarea class="form-control" rows="3" name="resumo" id="resumo" required=""></textarea>
                      						</div>
                    					</div>
                  					</div>
                  					<div class="row">
                    					<div class="col-md-12 col-xs-12">
                      						<div class="form-group">
                        						<label for="introducao" style="font-family: Verdana;" id="introducao">Introdução </label> 
                        						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Esse itém deve contér, além do detalhamento do problema a ser investigado, uma revisão da literatura a respeito do tema a ser desenvolvido no projeto de extensão." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        						</button>
                        						<textarea class="form-control" rows="3" name="introducao" id="introducao" required=""></textarea>
                      						</div>
                    					</div>
                  					</div>
                  					<div class="row">
                    					<div class="col-md-6 col-xs-6">
                      						<div class="form-group">
                        						<label for="objetivoGeral" style="font-family: Verdana;" id="objetivoGeral">Objetivos Gerais</label>
                        						<textarea class="form-control" rows="2" name="objetivoGeral" id="objetivoGeral" required=""></textarea>
                      						</div>
                    					</div>
                    					<div class="col-md-6 col-xs-6">
                      						<div class="form-group">
                        						<label for="objetivoEspecifico" style="font-family: Verdana;" id="objetivoEspecifico">Objetivos Específicos</label>
                        						<textarea class="form-control" rows="2" id="objetivoEspecifico" name="objetivoEspecifico" required=""></textarea>
                      						</div>
                    					</div>
                  					</div>
                  					<div class="row">
                    					<div class="col-md-12 col-xs-12">
                      						<div class="form-group">
                        						<label for="justificativa" style="font-family: Verdana;" id="justificativa">Justificativa </label> 
                        						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="A justificativa deve apresentar aspectos que apontem para a relevância do projeto, apresentando as razões pelas quais se busca realizar tal ação, bem como quais contribuições que ela pode proporcionar. Deve-se discutir, quando pertinente, quais as vantagens e benefícios decorrentes da execução do projeto." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        						</button>
                        						<textarea class="form-control" rows="3" name="justificativa" id="justificativa" required=""></textarea>
                      						</div>
                    					</div>
                  					</div>
                  					<div class="row">
                    					<div class="col-md-12 col-xs-12">
                      						<div class="form-group">
                        						<label for="impactos" style="font-family: Verdana;" id="impactos">Impactos Esperados </label> 
                        						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Apresentar os possíveis impactos sociais, tecnológicos e econômicos a serem proporcionados pelo projeto." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        						</button>
                        						<textarea class="form-control" rows="2" name="impactos" id="impactos" required=""></textarea>
                      						</div>
                    					</div>
                  					</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="publicoAlvo" style="font-family: Verdana;" id="publicoAlvo">Público-Alvo</label>
                        					<textarea class="form-control" rows="1" name="publicoAlvo" id="publicoAlvo" required=""></textarea>
                      					</div>
                    				</div>
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="materiais" style="font-family: Verdana;" id="materiais">Materiais e Métodos</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descrever a metodologia a ser empregada, as formas e técnicas que serão utilizadas para executar as atividades previstas." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="2" name="materiais" id="materiais" required=""></textarea>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="cronograma" style="font-family: Verdana;" id="cronograma">Cronograma Descritivo do Projeto</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Descrever, detalhadamente, as atividades que serão desenvolvidas durante o projeto, em conformidade com o plano de trabalho do bolsista." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="3" name="cronograma" id="cronograma" required=""></textarea>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="acompanhamento" style="font-family: Verdana;" id="acompanhamento">Sistema de Acompanhamento e Avaliação</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Indicar os mecanismos de acompanhamento e avaliação da atividade planejada. É relevante descrever sucintamente os procedimentos a serem adotados para realizar a avaliação contínua e sistemática das atividades." style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="2" id="acompanhamento" name="acompanhamento" required=""></textarea>
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-md-12 col-xs-12">
                      					<div class="form-group">
                        					<label for="responsaveis" style="font-family: Verdana;" id="responsaveis">Equipe de Execução</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<textarea class="form-control" rows="2" id="responsaveis" name="responsaveis" required=""></textarea>
                      					</div>
                    				</div>
                  				</div>                  				
                  				<div class="row">
                  					<div class="col-xs-6 col-md-6">
                      					<div class="form-group">
                        					<label for="estado" style="font-family: Verdana;" id="estado">Estado</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Estado atual, na qual você está acessando" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="text" name="estado" class="form-control" id="estado" required="">
                     					</div>
                    				</div>
                    				<div class="col-md-6 col-xs-6">
                      					<div class="form-group">
                        					<label for="cidade" style="font-family: Verdana;" id="cidade">Cidade</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Cidade atual, na qual você está acessando" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="text" name="cidade" class="form-control" id="cidade" required="">
                      					</div>
                    				</div>
                				</div>
                				<div class="row">
                					<div class="col-xs-6 col-md-6">
                      					<div class="form-group">
                        					<label for="dataAtual" style="font-family: Verdana;" id="dataAtual">Data</label>
                        					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Data atual" style="margin: 5px; color: white; padding: 1px; height: 20px; width: 20px; border-radius: 30px; font-family: Verdana; text-align: centers; font-size: smaller;"> ?
                        					</button>
                        					<input type="date" name="dataAtual" class="form-control" id="dataAtual" required="">
                     					</div>
                    				</div>
                					<div class="col-md-6 col-xs-6">
                    					<div class="form-group">
                      						<label for="arquivo" style="font-family: Verdana;" id="arquivo"> Anexar Imagem </label>
                      						<input type="file" name="arquivo" class="form-control-file" required="" id="arquivo" />
											<small id="notaAnexo" class="form-text text-muted"> Envie uma imagem em anexo. </small>
                    					</div>
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