<?php

if (resolve('/')) {
    render('site/home', 'site');

} elseif (resolve('/sobre')) {
    include __DIR__ . "/../views/site/sobre/routes.php";
     
} elseif (resolve('/forum')) {
    include __DIR__ . "/../views/site/forum/routes.php";

} elseif (resolve('/jogo')) {
    include __DIR__ . "/../views/site/jogo/routes.php";

} elseif (resolve('/rank')) {
    include __DIR__ . "/../views/site/rank/routes.php";

} elseif (resolve('/sair')) {
    session_destroy();
    header("location: login.php");
    
} else {
    # se nenhuma funcionar joga na página de erro
    http_response_code(404);
    echo "Pagina não encontrada";
    header("location: ../../err.php");
}