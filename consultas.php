<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Listagem</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div class="corpo">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Incluir</li></a>
				<a href="consultas.php"><li>Listar</li></a>
			</ul>
		</nav>
		<section>
			<h1>Listar</h1>
			<hr><br><br>

			<?php

			print "$registros registros encontrados.";
			print "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){

                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                
                print "<article>";
                
                print "$codigo<br>";
                print "$nome<br>";

                print "</article>";
            }
            mysqli_close($conexao);
			?>
			
			</form>
		</section>
</body>
</html>