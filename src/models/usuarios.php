<?php

Class Usuario
{
	private $pdo;
	public $msgErro = "";//tudo ok

	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $nickname, $senha)
	{
		global $pdo;
		//verificar se já existe o nickname cadastrado
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE nickname = :e");
		$sql->bindValue(":e",$nickname);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; //ja esta cadastrado
		}
		else
		{
			//caso nao, Cadastrar
			$sql = $pdo->prepare("INSERT INTO usuarios (nome, nickname, senha) VALUES (:n, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":e",$nickname);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true; //tudo ok
		}
	}


	public function logar($nickname, $senha)
	{
		global $pdo;
		//verificar se o nickname e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id, nome FROM usuarios WHERE nickname = :e AND senha = :s");
		$sql->bindValue(":e",$nickname);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			$_SESSION['id_usuario'] = $dado['id'];
			$_SESSION['nome'] = $dado['nome'];
			return true; //cadastrado com sucesso
		}
		else
		{
			return false;//nao foi possivel logar
		}
	}
}







?>