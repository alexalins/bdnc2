<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.7/css/bootstrap.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link href="css/criarConta.css" rel="stylesheet">
	<title>Cria conta</title>
</head>
<body>
<div class="bg-image"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="form-conta"> 
					<form role="form" class="form-1" action="usuario/cadastro.php" method="post">
							<div class="form-group">
								<label>
									Nome Completo
								</label>
								<input type="name" name = "nome" class="form-control"  />
							</div>
							<div class="form-group">
								<label>
									Apelido
								</label>
								<input type="name" name = "apelido" class="form-control" />
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">
									Email
								</label>
								<input type="email" name = "email" class="form-control" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">
									Senha
								</label>
								<input type="password" name = "senha" class="form-control" id="exampleInputPassword1" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">
									Repetir senha
								</label>
								<input type="password" name = "repetirSenha" class="form-control" id="exampleInputPassword1" />
							</div>
							<div class="form-group log-status"  align = "right"> 
	                           <button type="submit" class="btn btn-success">Criar</button>            
	                         </div>
						</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>