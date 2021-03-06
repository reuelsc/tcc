<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Editar</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">{Logo}</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../secretaria/index.php">Home</a></li>
					<li><a href="../secretaria/alunos.php">Alunos</a></li>
					<li><a href="../secretaria/turmas.php">Turmas</a></li>
					<li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
					<li><a href="../secretaria/cursos.php">Cursos</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Alterar Senha</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="wrapper" role="main">
		<div class="container container-fluid">
			<div class="row">
				<div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="page-header">
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputCod" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Código Disciplina:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<input type="text" class="form-control" id="inputCod" disabled required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<input type="text" class="form-control" id="inputDisciplina" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCH" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<input type="text" class="form-control" id="inputCH" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectSemestre" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<select name="selectSerie" id="selectSerie" class="form-control" required>
											<option value=""></option>
											<option value="1">1º</option>
											<option value="2">2º</option>
											<option value="3">3º</option>
											<option value="4">4º</option>
											<option value="5">5º</option>
											<option value="6">6º</option>
											<option value="7">7º</option>
											<option value="8">8º</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Período Letivo:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<select name="periodo" id="selectPeriodo" class="form-control" required>
											<option value=""></option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<select name="selectDependencia" id="selectDependencia" class="form-control" required>
											<option value=""></option>
											<option value="rdr">RDR</option>
											<option value="str">STR</option>
											<option value="gtr">GTR</option>
											<option value="trt">TRT</option>
											<option value="ster">STER</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputProfessor" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Professor:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-7">
										<select name="selectProfessor" id="selectProfessor" class="form-control" required>
											<option></option>
											<option>Guilherme Costa</option>
											<option>Fernando Gonçalves</option>
											<option>Wesley Tschiedel</option>
											<option>Welton Dias</option>
										</select>
									</div>
								</div>

								<div class="col-md-offset-6">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar-success">Alterar</button>
										<div class="modal fade" id="editar-success" tabindex="-1" role="dialog" aria-labelledby="editar-success" aria-hidden="true">
											<div class="modal-dialog modal">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
													</div>
													<div class="modal-body">
														<p>Alteração realizada com sucesso!</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
													</div>
												</div>
											</div>
										</div>
									<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer class="copyright">
		<div class="container container-fluid">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>