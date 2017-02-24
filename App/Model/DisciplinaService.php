<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 23/02/17
 * Time: 00:19
 */

namespace App\Model;
include_once SITE_ROOT . "/Lib/Elvis/Database/DataSource.php";
use Elvis\Database\DataSource;


class DisciplinaService{

    private $pdo = null;

    public function __construct(){
        $this->pdo = new DataSource;
    }

    public function gravarDisci(Disciplina $disciplina){
        $codigo = $disciplina->getCodDisci();
        $nome = $disciplina->getNomeDisci();
        $idProf = $disciplina->getIdProf();

        try{
            $sql = ("INSERT INTO Disciplina (nomeDisci, codDisci, Professor_idProf) VALUES (?,?,?);");
            $pd = $this->pdo->conexao();
            $stm = $pd->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $codigo);
            $stm->bindParam(3, $idProf);
            $stm->execute();
        }
        catch (\PDOException $e){
            echo "Erro :".$e->getMessage()."<br>";
        }
    }

}