<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "*****";
	$banco = "test";

	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	$res = mysqli_query($con, "SELECT titulo,autor FROM livros");
	$num_livros = mysqli_num_rows($res);
	echo "Existem $num_livros livros cadastrados no sistema.";
	mysqli_close($con);

?>