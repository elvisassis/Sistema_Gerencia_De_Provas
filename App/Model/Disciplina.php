<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 23/02/17
 * Time: 00:02
 */

namespace App\Model;


class Disciplina
{
    private $idDisci;
    private $nomeDisci;
    private $codDisci;
    private $idProf;

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
    public function getNomeDisci()
    {
        return $this->nomeDisci;
    }

    /**
     * @param mixed $nomeDisci
     */
    public function setNomeDisci($nomeDisci)
    {
        $this->nomeDisci = $nomeDisci;
    }

    /**
     * @return mixed
     */
    public function getCodDisci()
    {
        return $this->codDisci;
    }

    /**
     * @param mixed $codDisci
     */
    public function setCodDisci($codDisci)
    {
        $this->codDisci = $codDisci;
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



}