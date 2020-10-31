<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: login.php");
		exit;
    }

    require_once __DIR__ . '/../src/controllers/Page.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="./assets/img/novo1.png">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="./assets/style/estilo2.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</head>

<body>
    <main>
        <div class="nomeDaPagina">
            <h1 class="logo">Bem vindo <?= mb_convert_case($_SESSION["nome"], MB_CASE_TITLE, "UTF-8")?>!</h1>
        </div>
        
        <header class="cabecalho">
            <button class="btn-menu"><i class="fa fa-bars"></i></button>
            <nav class="menu">
                <a class="btn-close"><i class="fa fa-close"></i></a>
                <ul>
                    <li><a href="home.php">Início</a></li>
                    <li><a href="?page=sobre">Sobre</a></li>
                    <li><a href="?page=jogo">Jogo</a></li>
                    <li><a href="sair.php">Sair</a></li>
                </ul>
            </nav>
        </header>

        <?php
            if(!empty($_GET['page'])) {

                Page::setPage($_GET['page']);
                $resultGetPage = Page::getContent();

                if($resultGetPage['page']) {

                    include($resultGetPage['path']);
                }else {

                    include($resultGetPage['path']);
                }
            }else{
                require_once __DIR__ . "/../src/views/home.php";
            }

        ?>
    <footer>
        <div id="footer">
            <p>
                <span>&copy; 2020 desenvolvido por Maria Luiza</span>
            </p>
        </div>
    </footer>
    </main>
</body>
</html>