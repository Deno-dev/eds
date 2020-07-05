<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SuaNET - Cadastre-se!</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-png">
    	<link rel="stylesheet" href="css/style.css">
	</head>
	<body style="background-color: black;">
		<div class="container-index">
			<div class="logo">
				<img src="images/logo-suanet.png"> <br>
				<center><p>FICOU AINDA MAIS FÁCIL SER ATENDIDO!</p></center>
			</div>
			<div class="formcadastro">
				<center><p>Cadastre-se em nosso sistema de atendimento:</p></center>
				<form name="formcadastro" id="formcadastro" action="valida.php" method="post">
					<input type="text" name="usuario" placeholder="  Seu usuário...">
					<input type="password" name="senha" placeholder="  Sua senha...">
					<input type="password" name="confirm" placeholder="  Confirme sua senha...">
					<center><button class="botao" type="submit" form="formcadastro" value="Cadastrar">Cadastrar</button></center>
				</form>
			</div>
		</div>
	</body>
</html>