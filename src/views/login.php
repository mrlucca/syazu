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
		<a href="/cadastrar">Ainda não é cadastrado?<strong> Cadastre-se!</strong></a>
	</form>
</div>
<?php
if(isset($_POST['nickname']))
{
	$nickname = addslashes($_POST['nickname']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($nickname) && !empty($senha))
	{
		$u->conectar($ini["table"],	$ini["host"], $ini["user"], $ini["password"]);
		if($u->msgErro == "")
		{
			if($u->logar($nickname,$senha))
			{
				Flight::redirect('/');
			}
			else
			{
				?>
				<div class="msg-erro">
					Nickname e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}
?>
</body>
</html>