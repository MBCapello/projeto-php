<?php

include 'header.php';

$url = explode('?', $_SERVER['REQUEST_URI']);

include 'functions/functions.php';

match($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => lista(),
    '/editar' => editar(),
    '/excluir' => excluir(),
    default => notFound()
};

include 'footer.php';