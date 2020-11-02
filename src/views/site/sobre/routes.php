<?php
if (resolve('/sobre')) {
    render('site/sobre/sobre', 'site');

} else {
    # se nenhuma funcionar joga na página de erro
    header("location: err.php");
    http_response_code(404);
}