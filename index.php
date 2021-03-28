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
				<a href="index.php"><li>Incluir</li></a>
				<a href="consultas.php"><li>Listar</li></a>
				<a href="deletar.php"><li>Deletar</li><a>
				<a href="editar.php"><li>Editar</li></a>
			</ul>
		</nav>
		<section>
			<h1>Incluir</h1>
			<hr><br><br>

			<form method="post" action="processa.php">
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				<br><br>

				Nome<br>
				<input type="text" name="Nome" class="campo" maxlenth="40" required autofocus placeholder="Digite seu Login"><br>
				Data de Nascimento<br>
				<input type="date" name="Data_Nascimento" class="campo"required autofocus placeholder="Digite sua Data de Nascimento"><br>
				CPF<br>
				<input type="number" name="CPF" class="campo"required autofocus placeholder="Digite seu CPF"><br>
				RG<br>
				<input type="number" name="RG" class="campo"required autofocus placeholder="Digite seu RG"><br>
				Telefone<br>
				<input type="number" name="Telefone" class="campo"required autofocus placeholder="Digite seu Telefone"><br>
				Endereço<br>
				<input type="text" name="Ende" class="campo"required autofocus placeholder="Digite seu Endereço"><br>
				Endereço2<br>
				<input type="text" name="Ende2" class="campo"autofocus placeholder="OPCIONAL"><br>
				Endereço3<br>
				<input type="text" name="Ende3" class="campo"autofocus placeholder="OPCIONAL"><br>
				Endereço4<br>
				<input type="text" name="Ende4" class="campo"autofocus placeholder="OPCIONAL"><br>
				Endereço5<br>
				<input type="text" name="Ende5" class="campo"autofocus placeholder="OPCIONAL"><br>
				Endereço6<br>
				<input type="text" name="Ende6" class="campo"autofocus placeholder="OPCIONAL"><br>
			</form>
		</section>
</body>
</html>