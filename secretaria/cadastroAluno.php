<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Aluno</title>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
					<li><a href="#">Menu 4</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Sub1</a></li>
							<li><a href="#">Sub2</a></li>
							<li><a href="#">Sair <span class="pull-right glyphicon glyphicon-log-out"></span></a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Aluno</h3>
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
									<label for="inputMat" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Matrícula:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputMat" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<select name="selectCurso" id="selectCurso" class="form-control" required>
											<option value=""></option>
											<option value="prog-estruturada">Programação Estruturada</option>
											<option value="poo">Programação Orientada a Objetos</option>
											<option value="java">Java</option>
											<option value="sgbd">Sistemas de Banco de Dados</option>
											<option value="prog-bd">Programação de Banco de Dados</option>
											<option value="redes">Redes</option>
											<option value="c#">Programação Comercial</option>
											<option value="ia">Inteligência Artificial</option>
											<option value="ihm">Interface Homem-Máquina</option>
											<option value="prog-concorrente">Programação Concorrente</option>
											<option value="xml">XML</option>
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
									<label for="selectSemestre" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
									<div class="col-xs-6 col-sm-10 col-sm-11 col-lg-10">
										<select name="selectSemestre" id="selectSemestre" class="form-control" required>
											<option value=""></option>
											<option value="1">1º</option>
											<option value="2">2º</option>
											<option value="3">3º</option>
											<option value="4">4º</option>
											<option value="5">5º</option>
											<option value="6">6º</option>
											<option value="7">7º</option>
											<option value="8">8º</option>
											<option value="9">9º</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputPhone" required>
									</div>
								</div>

								<div class="form-group">
									<label for="radioSexo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<label class="btn btn-primary">
											<input type="radio" name="optionSexo" id="optionMasculino" value="masculino"> Masculino
										</label>
											
										<label class="btn btn-primary">
											<input type="radio" name="optionSexo" id="optionFeminino" value="feminino"> Feminino
										</label>
									</div>
								</div>

								<!--<div class="form-group">
									<label for="radioSexo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<label class="radio-inline">
											<input type="radio" name="optionSexo" id="optionMasculino" value="masculino">Masculino
										</label>

										<label class="radio-inline">
											<input type="radio" name="optionSexo" id="optionFeminino" value="feminino">Feminino
										</label>
									</div>
								</div>-->

								<div class="form-group">
									<label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nascimento:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputNac" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Email:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputEmail">
									</div>
								</div>

								<div class="pull-right">
									<button type="button" class="btn btn-success">Cadastrar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="wrapper" role="main">
		<div class="container container-2">
			<div class="row affix-row">
				<div id="menu" class="col-xs-12 col-sm-3 col-md-2 affix-sidebar">
					<div class="sidebar-nav">
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
					</div>
				</div>

				<div id="conteudo" class="col-xs-12 col-sm-9 col-md-10 affix-content">
					<div class="container container-2">
						<div class="page-header">
							<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Aluno</h3>
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
										<label for="inputMat" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Matrícula:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputMat" required>
										</div>
									</div>

									<div class="form-group">
										<label for="selectCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<select name="selectCurso" id="selectCurso" class="form-control" required>
												<option value=""></option>
												<option value="prog-estruturada">Programação Estruturada</option>
												<option value="poo">Programação Orientada a Objetos</option>
												<option value="java">Java</option>
												<option value="sgbd">Sistemas de Banco de Dados</option>
												<option value="prog-bd">Programação de Banco de Dados</option>
												<option value="redes">Redes</option>
												<option value="c#">Programação Comercial</option>
												<option value="ia">Inteligência Artificial</option>
												<option value="ihm">Interface Homem-Máquina</option>
												<option value="prog-concorrente">Programação Concorrente</option>
												<option value="xml">XML</option>
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
										<label for="selectSemestre" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
										<div class="col-xs-6 col-sm-10 col-sm-11 col-lg-10">
											<select name="selectSemestre" id="selectSemestre" class="form-control" required>
												<option value=""></option>
												<option value="1">1º</option>
												<option value="2">2º</option>
												<option value="3">3º</option>
												<option value="4">4º</option>
												<option value="5">5º</option>
												<option value="6">6º</option>
												<option value="7">7º</option>
												<option value="8">8º</option>
												<option value="9">9º</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputPhone" required>
										</div>
									</div>

									<div class="form-group" required>
										<label for="radioSexo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<label class="radio-inline">
												<input type="radio" name="optionSexo" id="optionMasculino" value="masculino">Masculino
											</label>

											<label class="radio-inline">
												<input type="radio" name="optionSexo" id="optionFeminino" value="feminino">Feminino
											</label>
										</div>
									</div>

									<div class="form-group">
										<label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nascimento:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputNac" required>
										</div>
									</div>

									<div class="form-group">
										<label for="inputEmail" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Email:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputEmail">
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
	</div> -->

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