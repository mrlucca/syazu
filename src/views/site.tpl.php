<!doctype html>
<html lang="pt-BR">
<head>
    <title>Syazu</title>
    <link rel="stylesheet" href="./assets/css/main.css"> 
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

</head>
<body class="d-flex flex-column">
<div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="#" class="navbar-brand nome-game">Syazu</a>
                <span class="navbar-text">
                    Bem vindo <?= mb_convert_case($_SESSION["nome"], MB_CASE_TITLE, "UTF-8")?>!
                </span>
            </span>
            <a href="/sair" class="btn btn-danger"><i class="fas fa-sign-out-alt">Sair</i></a>
        </nav>
</div>

<div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50"><small>MENU</small></span>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link 
                        <?php if (resolve('/')): ?> active<?php endif;?>
                        "><i class="far fa-file-alt"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/sobre" class="nav-link
                        <?php if (resolve('/sobre')): ?> active<?php endif;?>
                        "><i class="far fa-file-alt"></i>Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="/forum" class="nav-link
                        <?php if (resolve('/forum')): ?> active<?php endif;?>
                        "><i class="far fa-user"></i>Fórum</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jogo" class="nav-link
                        <?php if (resolve('/jogo')): ?> active<?php endif;?>
                        "><i class="far fa-user"></i>Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a href="/rank" class="nav-link
                        <?php if (resolve('/rank')): ?> active<?php endif;?>
                        "><i class="far fa-user"></i>Rank</a>
                    </li>
                </ul>
            </div>
            <div id="content" class="col-10">
                <?php include $content ?>
            </div>
        </div>

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
