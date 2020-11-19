<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">
	<title>Área de Cadastro</title>
	<link rel="icon" type="image/png" href="./assets/img/novo1.png">
	<link rel="stylesheet" href="./assets/css/estilo.css">
</head>
<body>
<div id="corpo-form-cad">
	<h1 class="textShadow">Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome" maxlength="30">
		<input type="nickname" name="nickname" placeholder="Nickname" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">
		<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
		<input class="row" type="submit" value="Cadastrar">
		<a href="/login">Clique aqui para fazer<strong> login!</strong></a>
	</form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$nickname = addslashes($_POST['nickname']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($nickname) && !empty($senha) && !empty($confirmarSenha))
	{ 

		$u->conectar($ini["table"],	$ini["host"], $ini["user"], $ini["password"]);
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$nickname,$senha))
				{
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Senha e confirmar senha não correspondem
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
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