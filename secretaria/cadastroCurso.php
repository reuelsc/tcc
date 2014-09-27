<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Curso</title>

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
					<li><a href="../secreataria/alnos.php">Alunos</a></li>
					<li><a href="../secretaria/turmas.php">Turmas</a></li>
					<li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
					<li><a href="../secretaria/cursos.php">Cursos</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span></a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span></a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Curso</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputNome" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
									<div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
										<input type="text" class="form-control" id="inputNome" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputOrientador" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Orientador:</label>
									<div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
										<input type="text" class="form-control" id="inputOrientador" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectTipo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Tipo:</label>
									<div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
										<select name="selectTipo" id="selectTipo" class="form-control" required>
											<option value=""></option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="numberCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
									<div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
										<input type="number" class="form-control" id="inputCarga" required>
									</div>
								</div>

								<div class="pull-right">
									<button type="button" class="btn btn-success">Cadastrar</button>
									<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<navbar class="navbar-inverse navbar-fixed-bottom">
			<div class="copyright">
				<div class="container container-fluid">
					<div class="row">
						<div class="col-md-12">
							<p>&copy; Todos os direitos reservados</p>
						</div>
					</div>
				</div>
			</div>
		</navbar>
	</footer>
</body>
</html>