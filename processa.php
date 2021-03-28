<?php

include_once("conexao.php");

$Nome = $_POST['Nome'];
$DNascimento = $_POST['Data_Nascimento'];
$CPF = $_POST['CPF'];
$RG = $_POST['RG'];
$Telefone = $_POST['Telefone'];
$Ende = $_POST['Ende'];
$Ende2 = $_POST['Ende2'];
$Ende3 = $_POST['Ende3'];
$Ende4 = $_POST['Ende4'];
$Ende5 = $_POST['Ende5'];
$Ende6 = $_POST['Ende6'];

$sql = "insert into usuarios (Nome,Data_Nascimento,CPF,RG,Telefone,Ende,Ende2,Ende3,Ende4,Ende5,Ende6) values ('$Nome','$DNascimento','$CPF','$RG','$Telefone','$Ende','$Ende2','$Ende3','$Ende4','$Ende5','$Ende6')" ;
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div class="corpo">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consultas.php"><li>Consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Corfirmação de Cadastro</h1>
			<hr><br><br>
			<?php

			if($linhas == 1):
				print 'Cadastro efetuado com sucesso'
			?>
			<?php
			else:
				print "Cadastro não efetuado.<br>Já existe um usuário com este CPF OU RG!";
			endif ;

			?>

		</section>
</body>
</html>