<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 15/02/17
 * Time: 19:40
 */

namespace App\Model;
//include __DIR__."/../../../../config.php";
include_once SITE_ROOT . "/Lib/Elvis/Database/DataSource.php";
use Elvis\Database\DataSource;
use App\Model\Professor;

class ProfessorService{

    private $pdo = null;

    public function __construct(){
        //$this->pdo = new DataSource;
    }

    public function gravarProfessor(Professor $professor){
        $nome = $professor->getNome();
        $email = $professor->getEmail();
        $senha = $professor->getSenha();

        try{
            $sql = ("INSERT INTO Professor (nomeProf, emailProf, senhaProf) VALUES (?,?,?);");
            $pd = DataSource::conexao();
            $stm = $pd->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $email);
            $stm->bindParam(3, $senha);
            $stm->execute();
        }
        catch (\PDOException $e){
            echo "Erro :".$e->getMessage()."<br>";
        }
    }


}