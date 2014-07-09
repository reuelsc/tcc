<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Turma</title>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/datepicker.css">-
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container container-2">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Logo</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
				<div class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Sub1</a></li>
							<li><a href="#">Sub2</a></li>
							<li><a href="#">Sair <span class="pull-right glyphicon glyphicon-log-out"></span></a></li>
						</ul>
					</li>
				</div>
			</div>
		</div>
	</nav>

	<div class="wrapper" role="main">
		<div class="container container-2">
			<div class="row affix-row">
				<div id="menu" class="col-xs-12 col-sm-3 col-md-2 affix-sidebar">
					<nav class="sidebar-nav">
						<div class="navbar navbar-default">
							<div id="navbar-collapse-1" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="#" data-toggle="collapse"><h4>Menu</h4></a>
									</li>

									<li>
										<a href="#" data-toggle="collapse" data-target="#toggleSidebar" data-parent="#sidenav01" class="collapsed">
											<span>Submenu 1 <span class="caret pull-right"></span></span>
										</a>

										<div class="collapse" id="toggleSidebar" style="height: 0px;">
											<ul class="nav nav-list">
												<li><a href="#">Submenu 1.1</a></li>
												<li><a href="#">Submenu 1.2</a></li>
												<li><a href="#">Submenu 1.3</a></li>
											</ul>
										</div>
									</li>

									<li>
										<a href="#" data-toggle="collapse" data-target="#toggleSidebar2" data-parent="#sidenav02" class="collapsed">
											<span>Submenu 2 <span class="caret pull-right"></span></span>
										</a>

										<div class="collapse" id="toggleSidebar2" style="height: 0px;">
											<ul class="nav nav-list">
												<li><a href="#">Submenu 2.1</a></li>
												<li><a href="#">Submenu 2.2</a></li>
												<li><a href="#">Submenu 2.3</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>

				<div id="conteudo" class="col-xs-12 col-sm-9 col-md-10 affix-content">
					<div class="container container-2">
						<div class="page-header">
							<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Turma</h3>
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
										<label for="Date" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<div class="input-group date">
												<input type="text" class="form-control">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-calendar"></i>
												</span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="Hora" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Hora:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<div class="input-group time">
												<input type="text" class="form-control" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>

									<hr />

									<div class="form-group">
										<label for="inputDisponibilidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disponibilidade:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<select name="selectDisponibilidade" id="selectDisponibilidade" class="form-control" required>
												<option></option>
												<option>Guilherme Costa</option>
												<option>Fernando Gonçalves</option>
												<option>Wesley Tschiedel</option>
												<option>Welton Dias</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
										<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
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
										<label for="selectHabilitado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Habilitado:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<select name="selectHabilitado" id="selectHabilitado" class="form-control">
												<option value=""></option>
												<option value="prog-estruturada">Programação Estruturada</option>
												<option value="poo">Programaçaõ Orientada a Objetos</option>
												<option value="redes">Redes de Computadores</option>
												<option value="c#">Programação Comercial</option>
												<option value="so">Sistemas Operacionais</option>
											</select>
										</div>
									</div>

									<div class="pull-right">
										<button type="button" class="btn btn-success">Cadastrar</button>
										<button type="button" class="btn btn-warning">Editar</button>
										<button type="button" class="btn btn-danger">Excluir</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container container-2">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-6">
					<h5><p>Anhanguera Educacional Faculdade de Negócios e Tecnologia da Informação - FACNET<br />Fone: (61) 0000-0000 Fax: (61) 0000-0000<br />Taguatinga-DF</p></h5>
				</div>
						
				<div id="logoFooter" class="col-xs-12 col-sm-3 col-md-3 col-md-offset-3 col-md-3">
					<h2>Logo</h2>
				</div>
			</div>
		</div>
	</footer>

	<div class="copyright">
		<div class="container container-2">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>

	<script type="text/javascript">
		$('.input-group.date').datepicker({
			format: "dd/mm/yyyy",
			language: "pt-BR",
			autoclose: true,
			todayHighlight: true
		});
	</script>
</body>
</html>