<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: login.php");
        exit;
    }

@$pagina = $_GET['a'];

if (isset($pagina)) {
  include $pagina;
}else{

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem vindo!</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="_imagens/novo1.png">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="_css/estilo2.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="_js/theme.js"></script>
</head>

<body>
    <main>
        <div class="nomeDaPagina">
            <h1 class="logo">Bem vindo!</h1>
        </div>
        
        <header class="cabecalho">
            <button class="btn-menu"><i class="fa fa-bars"></i></button>
            <nav class="menu">
                <a class="btn-close"><i class="fa fa-close"></i></a>
                <ul>
                    <li><a href="areaPrivada.php">Início</a></li>
                    <li><a href="pagina2.php">Sobre</a></li>
                    <li><a href="#">Jogo</a></li>
                    <li><a href="sair.php">Sair</a></li>
                </ul>
            </nav>
        </header>

            <div>
                <h1 class="tituloDaPostagem">SALVE MARTE</h1>
                    <section class="grid">
                        <p class="item">O jogo Salve Marte (história do jogo).</p>

                <h1 class="tituloDaPostagem">COMO JOGAR?</h1>
                    <section class="grid">
                        <p class="item">Você vai usar as teclas para movimentar para esquerda <td>&larr;</td> e direita <td>&rarr;</td></p>
                        <p class="item">Para pular você vai usar a seta para cima <td>&uarr;</td></p>

                <h1 class="tituloDaPostagem">OBJETIVO</h1>
                    <section class="grid">
                        <p class="item">(colocar objetivo).</p>
                        <p class="item">Conseguindo isso, você vence <td>&#9996;</td></p>

                <h1 class="tituloDaPostagem">PONTUAÇÃO</h1>
                    <section class="grid">
                        <p class="item">(sobre a pontução) <td>&#10084;</td> </p>

                <h1 class="tituloDaPostagem">BÔNUS</h1>
                    <section class="grid">
                        <p class="item">(sobre o bônus</p>
                    </section>
            </div>
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