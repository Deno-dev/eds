<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-png">
		<title> SuaNet -ADM </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/javascript.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
		<input type="checkbox" id="check" onclick="adaptachat()">
		<label id="icone" for="check"><img src="images/icone.png"></label>
		<div class="chat" id="corpo-chat">
			<div id="Resultado" class="corpo-mensagens">
			

			</div>	
				<input type="text" name="" id="input" class="inputmensagem" placeholder="Digite sua mensagem...">
				<input type="image" src="images/enviar.png" width='45' class='submit' name="">
		</div>
		<div class="barra">
			
			<nav>
				<?php 
				include 'conexao.php';

				$atendimentos = $link->query("SELECT * from atendimentos where status = '1'");
				while ($atendimento = $atendimentos->fetch_object()) {
					$iduser = $atendimento->idusers;
					echo "<a href='javascript:func()' onclick='abrirconversa(" . $atendimento->idatendimento . ")'><div class='link'>";
					echo  $atendimento->idatendimento . "<br>";
						$pnomeusuario = $link->query("Select * from users where idusers = '$iduser'");
						while ($nomeusuario = $pnomeusuario->fetch_object()) {
							echo "ID:" . $iduser . " " . $nomeusuario->usuario . "<br>";
						}
					echo $atendimento->assunto;
					echo "</div></a>";
				}
				 ?>
			</nav>
		</div>
		<div class="direita" id="direita">
		</div>
		<div class="footer"></div>
	</body>
</html>