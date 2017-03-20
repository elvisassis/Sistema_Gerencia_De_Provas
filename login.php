<?php

// inclui o arquivo de inicialização
require 'config.php';
require SITE_ROOT."/Lib/Elvis/Database/DataSource.php";
use Elvis\Database\DataSource;


// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($senha))
{
    echo "Informe email e senha";
    exit;
}

// cria o hash da senha
//$passwordHash = make_hash($password);

$pdo = null;
//$pdo = DataSource()::conexao();
$sql = "SELECT idProf, nomeProf FROM Professor WHERE emailProf = ? AND senhaProf = ?";
$pd = DataSource::conexao();
$stm = $pd->prepare($sql);
$stm->bindParam(1, $email);
$stm->bindParam(2, $senha);
$stm->execute();

$users = $stm->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['prof_id'] = $user['idProf'];
$_SESSION['prof_name'] = $user['nomeProf'];

header('Location: /SGP/App/Templates/Home.php');