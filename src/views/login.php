<?php 
// require_once __DIR__ . '/../src/models/usuarios.php';
// $u = new Usuario();
// $ini = parse_ini_file(dirname(__DIR__, 1) . "/.ini");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">
	<title> Área de Login </title>
	<link rel="stylesheet" href="./assets/css/estilo.css"> 
	<link rel="icon" type="image/png" href="./assets/img/novo1.png">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<div id="corpo-form">
	<h1 class="textShadow">Entrar</h1>
	<form method="POST">
		<input type="text" placeholder="Nickname" name="nickname">
		<input type="password" placeholder="Senha" name="senha">
		<input class="row" type="submit" value="Acessar">
		<a href="cadastrar.php">Ainda não é cadastrado?<strong> Cadastre-se!</strong></a>
	</form>
</div>

</body>
</html>