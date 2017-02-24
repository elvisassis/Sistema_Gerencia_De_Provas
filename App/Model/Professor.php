<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 15/02/17
 * Time: 19:22
 */

namespace App\Model;


class Professor
{

    private $idProf;
    private $nome;
    private $email;
    private $senha;


    public function __construct()
    {
        /*$this->idProf = $id;
        $this->$nome = $nome;
        $this->$email = $email;*/
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }




}