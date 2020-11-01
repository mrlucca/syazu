<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: login.php");
		exit;
    }

    require_once __DIR__ . '/../src/controllers/Page.php';

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <title>Syazu</title>
    <link rel="stylesheet" href="./assets/style/principal.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="navbar">
            <div class="hello">
                <div class="d-flex justify-content-start">
                    <h2>Hello <?= mb_convert_case($_SESSION["nome"], MB_CASE_TITLE, "UTF-8")?></h2>
                </div>
            </div>

            <div class="d-flex justify-content-end mr-3">
                <a class="btn btn-outline-info d-flex justify-content-end mr-2"
                   href="?page=home">HOME</a>
                <a class="btn btn-outline-info d-flex justify-content-end mr-2"
                   href="?page=sobre">SOBRE</a>
                <a class="btn btn-outline-info d-flex justify-content-end mr-2"
                   href="?page=jogo">JOGO</a>
                <div class="logout"><a class="btn btn-outline-warning d-flex justify-content-end mr-2"
                                       href="?page=rank">RANK</a></div>
                <div class="logout"><a class="btn btn-outline-warning d-flex justify-content-end mr-2"
                                       href="sair.php">SAIR</a></div>
            </div>

        </div>
    </header>
    <div class="conteudo">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <footer>
        <div class="copy">
            <p>
                <span>&copy; 2020 desenvolvido por Maria Luiza & Lucca</span>
            </p>
        </div>
    </footer>

</body>
</html>
