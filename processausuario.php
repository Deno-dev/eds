<?php 
	include 'conexao.php';
	//Captando o ID do atendimento através da função AJAX que inseriu no GET
	$id = $_GET["id"];

	//Consultando o atendimento no SQL
	$infoatendimento = $link->query("SELECT * from atendimentos where idatendimento = '$id'");
	//transformando a consulta em objeto
	$atendimento = $infoatendimento->fetch_object();
	//Separando o ID do usuário da consulta
	$iduser = $atendimento->idusers;

	//Consultando o usuário no SQL 
	$infousuario = $link->query("SELECT * from users where idusers = '$iduser'");
	//Transformando a consulta em Objeto
	$usuario = $infousuario->fetch_object();
	//Separando o nome do usuário da consulta
	$nome = $usuario->usuario;
	//Imprimindo o nome do usuário
	echo "<div class='foto-usuario'>";
		echo "<img src='images/user2.png' width='120px'>";
	echo "</div>";
	echo "<h3>" . "$nome" . "</h3>";

	echo "<br>";

	echo "<button class='encerrar' type='submit' form='formcadastro' value='Cadastrar'>Encerrar</button>";


