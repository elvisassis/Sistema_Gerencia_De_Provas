<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 16/03/17
 * Time: 12:13
 */

namespace App\Model;

include_once SITE_ROOT . "/Lib/Elvis/Database/DataSource.php";
use Elvis\Database\DataSource;


class QuestaoService
{
    private $pdo = null;

    public function __construct(){
        $this->pdo = DataSource::conexao();
    }

    public function gravarQuestao(Questao $questao){
        $tipoQuestao = $questao->getTipoQuestao();
        $grauDifi = $questao->getGrauDifi();
        $idProf = $questao->getIdProf();
        $idDisci = $questao->getIdDisci();
        $textoQuestao = $questao->getTextoQuestao();
        $alt1 = $questao->getAlt1();
        $alt2 = $questao->getAlt2();
        $alt3 = $questao->getAlt3();
        $alt4 = $questao->getAlt4();
        $alt5 = $questao->getAlt5();
        $resp1 = $questao->getResp1();
        $resp2 = $questao->getResp2();
        $resp3 = $questao->getResp3();
        $resp4 = $questao->getResp4();
        $resp5 = $questao->getResp5();

        try{
            if($tipoQuestao == 'trueFalse') {
                $sql = ("insert into Questao (tipoQuestao,textoQuestao,grau_difi,Professor_idProf,Disciplina_idDisc,Alt1,Alt2,Alt3,Alt4,Alt5,Resp1,Resp2,Resp3,Resp4,Resp5) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
                $pd = DataSource::conexao();
                $stm = $pd->prepare($sql);
                $stm->bindParam(1, $tipoQuestao);
                $stm->bindParam(2, $textoQuestao);
                $stm->bindParam(3, $grauDifi);
                $stm->bindParam(4, $idProf);
                $stm->bindParam(5, $idDisci);
                $stm->bindParam(6, $alt1);
                $stm->bindParam(7, $alt2);
                $stm->bindParam(8, $alt3);
                $stm->bindParam(9, $alt4);
                $stm->bindParam(10, $alt5);
                $stm->bindParam(11, $resp1);
                $stm->bindParam(12, $resp2);
                $stm->bindParam(13, $resp3);
                $stm->bindParam(14, $resp4);
                $stm->bindParam(15, $resp5);
                $stm->execute();
            }
            else if($tipoQuestao == 'fechada') {

                $sql = ("insert into Questao (tipoQuestao,textoQuestao,grau_difi,Professor_idProf,Disciplina_idDisc,Alt1,Alt2,Alt3,Alt4,Alt5,Resp1) values (?,?,?,?,?,?,?,?,?,?,?);");
                $pd = DataSource::conexao();
                $stm = $pd->prepare($sql);
                $stm->bindParam(1, $tipoQuestao);
                $stm->bindParam(2, $textoQuestao);
                $stm->bindParam(3, $grauDifi);
                $stm->bindParam(4, $idProf);
                $stm->bindParam(5, $idDisci);
                $stm->bindParam(6, $alt1);
                $stm->bindParam(7, $alt2);
                $stm->bindParam(8, $alt3);
                $stm->bindParam(9, $alt4);
                $stm->bindParam(10, $alt5);
                $stm->bindParam(11, $resp1);
                $stm->execute();
            }
            else if ($tipoQuestao == 'aberta'){
                $sql = ("insert into Questao (tipoQuestao,textoQuestao,grau_difi,Professor_idProf,Disciplina_idDisc) values (?,?,?,?,?);");
                $pd = DataSource::conexao();
                $stm = $pd->prepare($sql);
                $stm->bindParam(1, $tipoQuestao);
                $stm->bindParam(2, $textoQuestao);
                $stm->bindParam(3, $grauDifi);
                $stm->bindParam(4, $idProf);
                $stm->bindParam(5, $idDisci);
                $stm->execute();
                echo "Disci aberta";
            }



        }
        catch (\PDOException $e){
            echo "Erro :".$e->getMessage()."<br>";
        }
    }

    public function listarQuestao($idProf){
        $id = $idProf;
        try{
            $sql = ("select * from Questao where Professor_idProf = ?");
            $pd = DataSource::conexao();
            $stm = $pd->prepare($sql);
            $stm->bindParam(1, $id);
            $stm->execute();
            $row = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $row;
        }
        catch (\PDOException $e){
            echo "Erro :".$e->getMessage()."<br>";
        }

    }

    public function gerarProva($idProf, $idDisc){
        $idProfe = $idProf;
        $idDisci = $idDisc;
        try{
            $sql = ("select * from Questao where Professor_idProf = ? and Disciplina_idDisc= ? order by rand() limit 5;");
            $pd = DataSource::conexao();
            $stm = $pd->prepare($sql);
            $stm->bindParam(1, $idProfe);
            $stm->bindParam(2, $idDisci);
            $stm->execute();
            $row = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $row;
        }
        catch (\PDOException $e){
            echo "Erro :".$e->getMessage()."<br>";
        }
    }

}