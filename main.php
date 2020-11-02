<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("location: login.php");
    exit;
}

require __DIR__ . '/src/models/resolve-route.php';
require __DIR__ . '/src/models/render.php';

# ira verificar na url se é o admin ou o site
if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/src/routers/admin-route.php';

} elseif (resolve('/(.*)')) {
    require __DIR__ . '/src/routers/site-route.php';
}
