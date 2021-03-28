<?php

include_once("conexao.php");

$no = $_POST['no'];
$se = $_POST['se'];

$kk = "insert into login (no,se) values ('$no','$se')" ;


$salvar = mysqli_query($conexao,$kk);

$lin = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<section>
	<center>
 	<h1>Status de Login</h1>
 	<hr><br><br>
 	<?php

			if($lin == 1):
				print 'Login efetuado com sucesso'
			?>
			<?php
			else:
				print "Cadastro não efetuado.<br>Já existe um usuário com este CPF OU RG";
			endif ;

			?>	
			</center>
</section>
</body>
</html>