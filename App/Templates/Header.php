<?php
session_start();
include_once __DIR__."/../../config.php";
include_once SITE_ROOT."/chek.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Sistema de gerencia de provas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
    <link href="bootstrap-3.3.7/css/estilo.css" rel="stylesheet" type="text/css">
    <script src="../bootstrap-3.3.7/js/vendor/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="../bootstrap-3.3.7/css/estilo.css" rel="stylesheet" type="text/css"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">SGP </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/SGP/App/Templates/Home.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Avaliaçoes
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="CadastroProva.php">Prova</a></li>
                    <li><a href="#">Lista de exercios</a></li>
                    <li><a href="#">Simulados</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Extras
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="ListagemQuestao.php">Questões</a></li>
                    <li><a href="#">Gabritos</a></li>
                    <li><a href="ListagemDisciplina.php">Disciplina</a></li>
                </ul>
            </li>
            <li><a href="/SGP/logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
        </ul>
    </div>
</nav>