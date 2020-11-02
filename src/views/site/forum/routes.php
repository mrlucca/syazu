<?php

if (resolve('/forum')) {
    render('site/forum/forum', 'site');

}else if (resolve('/forum/loco')) {
    echo "hello";

} else {
    # se nenhuma funcionar joga na página de erro
    http_response_code(404);
}