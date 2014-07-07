<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistema de Apoio a Dependência">

	<title>SAD - Login</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container container-2">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Logo</a>
			</div>
		</div>
	</nav>

	<div class="wrapper" role="main">
		<div class="container">
			<div class="row">
				<div id="apresentacao" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h3><p class="well">Aqui será o espaço de apresentação do sistema</p></h3>
				</div>
					
				<div id="form_login" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<form class="form signin" role="form">
						<h2 class="form-signin-heading">Login</h2>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
							<input class="form-control" type="login" placeholder="Login" autofocus required>
						</div>

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input class="form-control" type="password" placeholder="Senha" required>
						</div>
									
						<br />

						<button class="btn btn-primary pull-left" type="submit" value="Entrar" name="Submit">Entrar</button>
					</form>
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
		  <p><span class="glyphicon glyphicon-copyright-mark"></span> Todos os Direitos Reservados</p>
		</div>
	  </div>
	</div>
  </div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>