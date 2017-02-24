<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 23/02/17
 * Time: 00:02
 */

namespace App\Control;

//include __DIR__."../../../config.php";
use App\Model\Disciplina;
use App\Model\DisciplinaService;

include_once SITE_ROOT . "/App/Model/Disciplina.php";
include_once SITE_ROOT . "/App/Model/DisciplinaService.php";


class DisciplinaController{

    private $gravar;
    private $vetParam;


    public function __construct()
    {

    }

    public function Request(){
        $disciplina = new Disciplina();
        $this->vetParam = array();
        $this->vetParam = ['id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'codigo' => $_POST['codigo'],
            'idProf' => $_POST['idProf'] ,
        ];

        $id = 0;
        $disciplina->setIdDisci($id);
        $disciplina->setNomeDisci($this->vetParam['nome']);
        $disciplina->setCodDisci($this->vetParam['codigo']);
        $disciplina->setIdProf($this->vetParam['idProf']);

        $this->gravar = new DisciplinaService();
        $this->gravar->gravarDisci($disciplina);

    }

}