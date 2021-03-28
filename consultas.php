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
				$DNascimento = $exibirRegistros[2];
				$CPF = $exibirRegistros[3];
				$RG = $exibirRegistros[4];
				$Telefone = $exibirRegistros[5];
				$Ende = $exibirRegistros[6];
				$Ende2 = $exibirRegistros[7];
				$Ende3 = $exibirRegistros[8];
				$Ende4 = $exibirRegistros[9];
				$Ende5 = $exibirRegistros[10];
				$Ende6 = $exibirRegistros[11];
				
                
                print "<article>";
                
                print "$codigo<br>";
                print "$nome<br>";
				print "$DNascimento<br>";
				print "$CPF<br>";
				print "$RG<br>";
				print "$Telefone<br>";
				print "$Ende<br>";
				print "$Ende2<br>";
				print "$Ende3<br>";
				print "$Ende4<br>";
				print "$Ende5<br>";
				print "$Ende6";

                print "</article>";
            }
            mysqli_close($conexao);
			?>
			
			</form>
		</section>
</body>
</html>