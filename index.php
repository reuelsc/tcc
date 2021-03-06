<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistema de Apoio a Dependência">

	<title>SAD - Login</title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container container-fluid">
				<div class="navbar-header">
					<!-- <a href="#" class="navbar-brand">{Logo}</a> -->
					<a href="#" class="navbar-brand">{Logo}</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="wrapper" role="main">
		<div class="container container-fluid">
			<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;<span class="sr-only">Close</span></span></button>
				<strong>Usuário ou senha incorreto</strong>
			</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Login</div>
						<div style="float:right; font-size:80%; position:relative; top:-10px;"><a href="#">Esqueceu a senha?</a></div>
					</div>

					<div style="padding-top:30px;" class="panel-body">
						<div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form method="" id="loginform" class="form-horizontal" role="form">
							<div style="margin-bottom:25px;" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" id="login-username" class="form-control" name="username" placeholder="CPF">
							</div>

							<div style="margin-bottom:25px;" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" id="login-password" class="form-control" name="password" placeholder="Senha">
							</div>

							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<label class="btn btn-primary">
										<input type="checkbox" id="login-remember" name="remember" value="1"> Lembrar-me</input>
									</label>
									<button class="btn btn-primary btn-success" name="login" type="submit" value="login">Login</button>
								</div>
							</div>
						</form>
					</div>
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

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>