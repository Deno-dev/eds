<?php 
	$host = "localhost";
	$banco = "eds";
	$user = "root";
	$senha = "";

	$link = mysqli_connect($host, $user, $senha, $banco);
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
 ?>