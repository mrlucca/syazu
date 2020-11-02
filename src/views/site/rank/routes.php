<?php
if (resolve('/rank')) {
    render('site/rank/rank', 'site');

} elseif (resolve('/rank.*')) {
   echo "página não encontrada";

} else {
    # se nenhuma funcionar joga na página de erro
    http_response_code(404);
    header("location: index.php");
}