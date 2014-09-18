<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Usuário</title>

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
				<a class="navbar-brand" href="">{Logo}</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../coordenador/index.php">Home</a></li>
					<li><a href="../coordenador/alunos.php">Alunos</a></li>
					<li><a href="../coordenador/turmas.php">Turmas</a></li>
					<li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
					<li><a href="../coordenador/usuarios.php">Usuários</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="wrapper" roel="main">
		<div class="container container-fluid">
			<div class="row">
				<div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="page-header">
						<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Usuário</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputName" required>
									</div>
								</div>

								<div class="form-group">
									<label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<label class="btn btn-primary">
											<input type="radio" name="optionPerfil" id="optionProfessor" value="professor"> Professor
										</label>
											
										<label class="btn btn-primary">
											<input type="radio" name="optionPerfil" id="optionCoordenador" value="coordenador"> Coordenador
										</label>

										<label class="btn btn-primary">
											<input type="radio" name="optionPerfil" id="optionSecretaria" value="secretaria"> Secretária
										</label>

										<!--<label class="radio-inline">
											<input type="radio" name="optionPerfil" id="optionProf" value="professor">Professor</input>
										</label>

										<label class="radio-inline">
											<input type="radio" name="optionPerfil" id="optionCoord" value="coordenador">Coordenador</input>
										</label>

										<label class="radio-inline">
											<input type="radio" name="optionPerfil" id="optionSecret" value="secretaria">Secretária</input>
										</label>-->
									</div>
								</div>

								<div class="form-group">
									<label for="inputCPF" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputCPF" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputNasc" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputPhone" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputEndereco" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Endereço:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputEndereco" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputComplemento" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Complemento:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputComplemento" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Cidade:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputCidade" required>
									</div>
								</div>

								<div class="form-group">
									<label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Estado:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<select name="selectEstado" id="selectEstado" class="form-control" required>
											<option></option>
											<option>AM</option>
											<option>PA</option>
											<option>BA</option>
											<option>TO</option>
											<option>DF</option>
											<option>MA</option>
											<option>CE</option>
											<option>RJ</option>
											<option>SP</option>
										</select>
									</div>
								</div>

								<div class="pull-right">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#user-success">Cadastrar</button>
										<div class="modal fade" id="user-success" tabindex="-1" role="dialog" aria-labelledby="user-success" aria-hidden="true">
											<div class="modal-dialog modal">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
													</div>
													<div class="modal-body">
														<p>Usuário cadastrado com sucesso!</p>
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

	<footer class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="copyright">
			<div class="container container-fluid">
			  <div class="row">
				<div class="col-md-12">
				  <p>&copy; Todos os direitos reservados</p>
				</div>
			  </div>
			</div>
		</div>
	</footer>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>