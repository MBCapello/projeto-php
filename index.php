<?php
include 'header.php';
$url = $_SERVER['REQUEST_URI'];
include 'functions/functions.php';

match($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => lista(),
    default => notFound()
};

include 'footer.php';