<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<link rel="stylesheet" href="css/style.css">	

<body>

	<header>
		<h1>Realizamos seu cadastro.</h1>
		<h3>Em breve recebera os cupons.</h3>
	</header>
	
	<?php 

	require_once('conexao.php');

	$usuario  = $_POST["usuario"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$bancoDados = new db();

	$link = $bancoDados -> conecta_mysql();

	$sql = "insert into usuarios (usuario, email, senha) values('$usuario', '$email', '$senha')";

	mysqli_query($link, $sql);
?>

<section>
	<br><br>
	<h2>Muito Obrigado.</h2>
	<br><br>
	<a href="index.php" class="botao"> << Voltar</a>
</section>
<br>
	<footer>
		<h3>TECTREINAMENTOS INFORMÁTICA LTDA</h3>
		<h3>Marcio Rogerio Spadari Junior</h3>
		<h3>Contato: (17) 98107-2933</h3>		
	</footer>

</body>
</html>