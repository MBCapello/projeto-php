<?php

function home() {
    include 'pages\home\index.php';
};

function login() {
    include 'pages\login\index.php';
};

function cadastro() {
    if ($_POST) {
        addCadastro();
    };

    include 'pages\cadastro\index.php';
};
function addCadastro() {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];

    $arquivo = fopen('./data/dados.csv', 'a+');
    fwrite($arquivo, "{$nome};{$email};{$tel}".PHP_EOL);
    fclose($arquivo);

    $mensagens = 'Pronto! Cadastro realizado.';
    include 'mensagens.php';
};

function lista() {
    $contatos = file('data/dados.csv');

    include 'pages\lista\index.php';
};

function editar() {
    $id = $_GET['id'];
    $contatos = file('data/dados.csv');
    $dados = explode(';', $contatos[$id]);
    
    
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['telefone'];
       

        $contatos[$id] = "{$nome};{$email};{$tel}".PHP_EOL;
        unlink('data/dados.csv');
        $arquivo = fopen('data/dados.csv', 'a+');
        
        
        foreach ($contatos as $contato) {
            fwrite($arquivo, $contato);
        }
        fclose($arquivo);
        $mensagens="Contato editado.";
        include 'mensagens.php';
    }
    $dados = explode(';', $contatos[$id]);
    include 'pages/editar/index.php';
};

function excluir() {
    $id = $_GET['id'];
    $contatos = file('data/dados.csv');

    unset($contatos[$id]);
    unlink('data/dados.csv');

    $arquivo = fopen('data/dados.csv','a+');

    foreach ($contatos as $contato) {
        fwrite($arquivo, $contato);
    }
    fclose($arquivo);
    include 'pages/lista/index.php';
    $mensagens="Contato excluido.";
    include 'mensagens.php';
};
function abrirModal() {
    include 'pages\modal\index.php';
};

function notFound() {
    include 'pages\notFound\index.php';
};  