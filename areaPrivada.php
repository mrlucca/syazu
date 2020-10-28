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

            <div class="espacamentoDaPagina">
                <div class="selecaoDaPagina">
                    <section class="span1 span2">
                        <article class="blog-post">
                            <h1 class="tituloDaPostagem">SALVE MARTE</h1>
                            <h2 class="data">Postado 14 Março 2020</h2>
                            <p class="paragrafoDoConteudo">A espera finalmente acabou! O Salve Marte foi lançado e está
                            esperando você para desfrutar dessa maravilha! Entâo clica aqui em baixo e vai la conferir.</p>
                            <a href="#" class="botaoLerMais">Jogar</a>
                        </article>

                        <article class="blog-post">
                            <h1 class="tituloDaPostagem">Novidades por ai?</h1>
                            <h2 class="data">Postado 20 janeiro 2020</h2>
                            <p class="paragrafoDoConteudo">Boatos que um certo jogo está prestes a ser lançado, mas que jogo é esse?
                            De onde ele vem? Como que joga? Cheio de dúvidas né?! Clica aqui em baixo e descubra tudo.</p>
                            <a href="pagina2.php" class="botaoLerMais">Descobrir</a>
                        </article>
                    </section>

                    <aside class="span1 span3">
                        <div class="baseLateral">
                            <img src="_imagens/novo1.png" alt="img">
                            <p class="paragrafoLateral">Somos uma empresa de grande porte mundial (apenas eu) :D</p>
                        </div>

                        <div class="baseLateral">
                            <p class="paragrafoLateral">Dizem que não existe vida em marte, mas será mesmo? Se quiser descobrir se existe
                            ou não, clica aqui em baixo e venha conhecer mais sobre esse jogo!</p>
                            <a href="pagina2.php" class="meNotifique">Saiba Mais</a>
                        </div>
                    </aside>

                </div>
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