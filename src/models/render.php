<?php

function render($content, $template, array $data = []) {
    $content = __DIR__ . '/../views/' . $content . '.tpl.php';
    return include __DIR__ . '/../views/' . $template . '.tpl.php';
}
