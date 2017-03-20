<?php

$questao = $_POST["tipo_questao"];

if($questao == "aberta")
    require_once "QuestaoAberta.php";
else if ($questao == "fechada")
    require_once "QuestaoFechada.php";
else
    require_once "QuestaoTrueFalse.php";


