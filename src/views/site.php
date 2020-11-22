<!doctype html>
<html lang="pt-BR">
<head>
    <title>Syazu</title>
    <link rel="stylesheet" href="./assets/css/main.css"> 
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column">
<div id="header">

<div class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Bem vindo <?= mb_convert_case($_SESSION["nome"], MB_CASE_TITLE, "UTF-8") ?>!</a>
    <a href="/sair" class="btn btn-danger"><i class="fas fa-sign-out-alt">Sair</i></a>      
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(atual)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/sobre">Sobre<span class="sr-only">(atual)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/jogo">Jogo <span class="sr-only">(atual)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/rank">Rank<span class="sr-only">(atual)</span></a>
              </li>
        
            </ul>
          </div>

</div>


<div id="main">
    <div id="content" class="container-fluid">
        <?php include __DIR__ . "/site/{$nomeDoConteudo}.php" ?>
    </div>

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
