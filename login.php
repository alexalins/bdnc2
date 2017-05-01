<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.7/css/bootstrap.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
	<title>Login</title>
	<style type="text/css">

	</style>
</head>
<body>
	<div class="bg-image"></div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" >
			<div id="login">
				<form role="form" action="redis.php" method="post">
				<div class="login-form">
					<div class="form-group">	 
						<label for="exampleInputEmail1">
						Email
						</label>
						<input type="email" name ="email" class="form-control" />
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">
						Senha
						</label>
					<input type="password" name = "senha" class="form-control" />
					</div>
					<div>
						<button type="submit" class="btn btn-success">Entrar</button>
					</div>
					<br>
					<div>
						<label>Deseja criar uma conta? <a href="criarConta.php">Criar conta</a></label>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>