<?php 
	include "conexao.php";

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$confirmacao = $_POST['confirmacao'];

	if ($senha != $confirmacao) {
		echo "<script>
				alert('As senhas não iguais! Tente novamente');";
		echo "javascript:window.location='index.php';
		     </script>";
		die;
	}

	$inserir = $link->query("insert into users(usuario, senha, tipo) values('$usuario', '$senha', 'cliente');");

	if ($inserir == true) {
		echo "<script>
				alert('Usuário criado com sucesso! Acesse nosso sistema com seu login e senha e aproveite!');";
		echo "javascript:window.location='login.php';
		    </script>";
	}else{
		echo "<script>
				alert('Desculpe, algo deu errado :/ Tente novamente, caso o problema persiste contate o administrador do Sistema');";
		echo "javascript:window.location='index.php';
		    </script>";
	}