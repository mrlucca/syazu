<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');

} elseif (resolve('/admin/users.*')) {
    render('admin/users', 'admin');
     
} elseif (resolve('/admin/api.*')) {
    render('admin/api', 'admin');
     
} elseif (resolve('/admin/post.*')) {
    render('admin/post', 'admin');

} elseif (resolve('/admin/sair')) {
    session_destroy();
    header("location: login.php");
    
} else {
    # se nenhuma funcionar joga na página de erro
    http_response_code(404);
    echo "Pagina não encontrada";
    header("location: ../../err.php");
}