<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 15/02/17
 * Time: 19:38
 */

namespace App\Control;

//include __DIR__."../../../config.php";
include_once SITE_ROOT . "/App/Model/Professor.php";
include_once SITE_ROOT . "/App/Model/ProfessorService.php";
include_once SITE_ROOT."/Lib/Elvis/Control/Page.php";

use App\Model\Professor;
use App\Model\ProfessorService;
use Elvis\Control\Page;

class ProfessorController
{

    //private $professor;
    private $gravar;
    private $vetParam;


    public function __construct()
    {

    }

    public function Request(){
        $professor = new Professor();
        $this->vetParam = array();
        $this->vetParam = ['id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        $id = 0;
        $professor->setIdProf($id);
        $professor->setNome($this->vetParam['nome']);
        $professor->setEmail($this->vetParam['email']);
        $professor->setSenha($this->vetParam['senha']);

        $this->gravar = new ProfessorService();
        $this->gravar->gravarProfessor($professor);

    }



}
