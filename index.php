<?php
$url = $_SERVER['REQUEST_URI'];

match($url) {
    '/' => include 'pages\home\index.php',
    '/login' => include 'pages\login\index.php',
    '/cadastro' => include 'pages\cadastro\index.php',
    default => include 'pages\notFound\index.php'
};
