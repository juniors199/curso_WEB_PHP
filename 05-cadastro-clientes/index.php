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
		<h1>Treinamento PHP - SQL</h1>
		<h3>Cadastro de Clientes</h3>
	</header>
	
	<br>

	<section>
		<h2>Preencha os campos abaixo e cadastre-se</h2>
		<br>
		<form action="validar.php" method="post" id="usuarios" target="">

			<label for="usuario">Usuário</label><br>
			<input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário">
			<br><br>
			<label for="email">E-Mail</label><br>
			<input type="email" id="email" name="email" placeholder="Digite seu e-mail">
			<br><br>
			<label for="senha">Senha</label><br>
			<input type="password" id="senha" name="senha" placeholder="Crie uma senha"><br><br>

			<input type="submit" class="botao" name="cadastrar">
			
		</form>

	</section>
	<br>
	<footer>
		<h3>Marcio Rogerio Spadari Junior</h3>
		<h3>Contato: (17) 98107-2933</h3>		
	</footer>

</body>
</html>