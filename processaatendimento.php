<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

	include("conexao.php");
	$sql = $link->query("SELECT * from chatmomentaneo where idatendimento = '$id'");
	sleep(1);
	if ($sql == true) {
		while($dados = $sql->fetch_object()){
			$idusuario = $dados->idusers;
			$pesquisanome = $link->query("select * from users where idusers = '$idusuario'");
			$fetchnome = $pesquisanome->fetch_object();
			$nomedoindividuo = $fetchnome->usuario;
			echo "<div class='" .  "mensagem'>";
			echo "<h3>" . $nomedoindividuo . "</h3>";
			echo "<p>" . $dados->mensagem . "</p>";
			echo "</div>";
		}
	}else{
		echo "Consulta SQL deu ruim meu patrão";
	}
}
?>