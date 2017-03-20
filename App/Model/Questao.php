<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 16/03/17
 * Time: 12:13
 */

namespace App\Model;


class Questao
{
    private $tipoQuestao;
    private $grauDifi;
    private $idProf;
    private $idDisci;
    private $textoQuestao;
    private $alt1;
    private $alt2;
    private $alt3;
    private $alt4;
    private $alt5;
    private $resp1;
    private $resp2;
    private $resp3;
    private $resp4;
    private $resp5;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getTipoQuestao()
    {
        return $this->tipoQuestao;
    }

    /**
     * @param mixed $tipoQuestao
     */
    public function setTipoQuestao($tipoQuestao)
    {
        $this->tipoQuestao = $tipoQuestao;
    }

    /**
     * @return mixed
     */
    public function getGrauDifi()
    {
        return $this->grauDifi;
    }

    /**
     * @param mixed $grauDifi
     */
    public function setGrauDifi($grauDifi)
    {
        $this->grauDifi = $grauDifi;
    }

    /**
     * @return mixed
     */
    public function getIdProf()
    {
        return $this->idProf;
    }

    /**
     * @param mixed $idProf
     */
    public function setIdProf($idProf)
    {
        $this->idProf = $idProf;
    }

    /**
     * @return mixed
     */
    public function getIdDisci()
    {
        return $this->idDisci;
    }

    /**
     * @param mixed $idDisci
     */
    public function setIdDisci($idDisci)
    {
        $this->idDisci = $idDisci;
    }

    /**
     * @return mixed
     */
    public function getTextoQuestao()
    {
        return $this->textoQuestao;
    }

    /**
     * @param mixed $textoQuestao
     */
    public function setTextoQuestao($textoQuestao)
    {
        $this->textoQuestao = $textoQuestao;
    }

    /**
     * @return mixed
     */
    public function getAlt1()
    {
        return $this->alt1;
    }

    /**
     * @param mixed $alt1
     */
    public function setAlt1($alt1)
    {
        $this->alt1 = $alt1;
    }

    /**
     * @return mixed
     */
    public function getAlt2()
    {
        return $this->alt2;
    }

    /**
     * @param mixed $alt2
     */
    public function setAlt2($alt2)
    {
        $this->alt2 = $alt2;
    }

    /**
     * @return mixed
     */
    public function getAlt3()
    {
        return $this->alt3;
    }

    /**
     * @param mixed $alt3
     */
    public function setAlt3($alt3)
    {
        $this->alt3 = $alt3;
    }

    /**
     * @return mixed
     */
    public function getAlt4()
    {
        return $this->alt4;
    }

    /**
     * @param mixed $alt4
     */
    public function setAlt4($alt4)
    {
        $this->alt4 = $alt4;
    }

    /**
     * @return mixed
     */
    public function getAlt5()
    {
        return $this->alt5;
    }

    /**
     * @param mixed $alt5
     */
    public function setAlt5($alt5)
    {
        $this->alt5 = $alt5;
    }

    /**
     * @return mixed
     */
    public function getResp1()
    {
        return $this->resp1;
    }

    /**
     * @param mixed $resp1
     */
    public function setResp1($resp1)
    {
        $this->resp1 = $resp1;
    }

    /**
     * @return mixed
     */
    public function getResp2()
    {
        return $this->resp2;
    }

    /**
     * @param mixed $resp2
     */
    public function setResp2($resp2)
    {
        $this->resp2 = $resp2;
    }

    /**
     * @return mixed
     */
    public function getResp3()
    {
        return $this->resp3;
    }

    /**
     * @param mixed $resp3
     */
    public function setResp3($resp3)
    {
        $this->resp3 = $resp3;
    }

    /**
     * @return mixed
     */
    public function getResp4()
    {
        return $this->resp4;
    }

    /**
     * @param mixed $resp4
     */
    public function setResp4($resp4)
    {
        $this->resp4 = $resp4;
    }

    /**
     * @return mixed
     */
    public function getResp5()
    {
        return $this->resp5;
    }

    /**
     * @param mixed $resp5
     */
    public function setResp5($resp5)
    {
        $this->resp5 = $resp5;
    }



}