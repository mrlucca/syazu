<?php
if (resolve('/jogo')) {
    render('site/jogo/jogo', 'site');

} else {
    # se nenhuma funcionar joga na página de erro
    http_response_code(404);
    header("location: err.php");
}