<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 16/03/17
 * Time: 12:12
 */

namespace App\Control;

use App\Model\Questao;
use App\Model\QuestaoService;

include_once SITE_ROOT.'/App/Model/Questao.php';
include_once SITE_ROOT.'/App/Model/QuestaoService.php';


class QuestaoController{

    private $gravar;
    private $vetParam;


    public function __construct()
    {

    }

    public function Request(){
        $questao = new Questao();
        $this->vetParam = array();
        if($_POST['tipo'] == 'fechada') {
            $this->vetParam = ['id' => $_POST['id'],
                'idProf' => $_POST['idProf'],
                'idDisc' => $_POST['idDisc'],
                'grau' => $_POST['grau'],
                'texto_questao' => $_POST['texto_questao'],
                'alt1' => $_POST['alt1'],
                'alt2' => $_POST['alt2'],
                'alt3' => $_POST['alt3'],
                'alt4' => $_POST['alt4'],
                'alt5' => $_POST['alt5'],
                'gabarito' => $_POST['gabarito'],
                'tipo' => $_POST['tipo'],
            ];

            $questao->setIdProf($this->vetParam['idProf']);
            $questao->setIdDisci($this->vetParam['idDisc']);
            $questao->setGrauDifi($this->vetParam['grau']);
            $questao->setTipoQuestao($this->vetParam['tipo']);
            $questao->setTextoQuestao($this->vetParam['texto_questao']);
            $questao->setAlt1($this->vetParam['alt1']);
            $questao->setAlt2($this->vetParam['alt2']);
            $questao->setAlt3($this->vetParam['alt3']);
            $questao->setAlt4($this->vetParam['alt4']);
            $questao->setAlt5($this->vetParam['alt5']);
            $questao->setResp1($this->vetParam['gabarito']);

            $this->gravar = new QuestaoService();
            $this->gravar->gravarQuestao($questao);
        }
        else if($_POST['tipo'] == 'trueFalse'){
            echo $_POST['grau'];
            $this->vetParam = ['id' => $_POST['id'],
                'idProf' => $_POST['idProf'],
                'idDisc' => $_POST['idDisc'],
                'grau' => $_POST['grau'],
                'texto_questao' => $_POST['texto_questao'],
                'alt1' => $_POST['alt1'],
                'alt2' => $_POST['alt2'],
                'alt3' => $_POST['alt3'],
                'alt4' => $_POST['alt4'],
                'alt5' => $_POST['alt5'],
                'gabaritoVF1' => $_POST['gabaritoVF1'],
                'gabaritoVF2' => $_POST['gabaritoVF2'],
                'gabaritoVF3' => $_POST['gabaritoVF3'],
                'gabaritoVF4' => $_POST['gabaritoVF4'],
                'gabaritoVF5' => $_POST['gabaritoVF5'],
                'tipo' => $_POST['tipo'],
            ];
            $questao->setIdProf($this->vetParam['idProf']);
            $questao->setIdDisci($this->vetParam['idDisc']);
            $questao->setGrauDifi($this->vetParam['grau']);
            $questao->setTipoQuestao($this->vetParam['tipo']);
            $questao->setTextoQuestao($this->vetParam['texto_questao']);
            $questao->setAlt1($this->vetParam['alt1']);
            $questao->setAlt2($this->vetParam['alt2']);
            $questao->setAlt3($this->vetParam['alt3']);
            $questao->setAlt4($this->vetParam['alt4']);
            $questao->setAlt5($this->vetParam['alt5']);
            $questao->setResp1($this->vetParam['gabaritoVF1']);
            $questao->setResp2($this->vetParam['gabaritoVF2']);
            $questao->setResp3($this->vetParam['gabaritoVF3']);
            $questao->setResp4($this->vetParam['gabaritoVF4']);
            $questao->setResp5($this->vetParam['gabaritoVF5']);

            $this->gravar = new QuestaoService();
            $this->gravar->gravarQuestao($questao);
        }

        else if($_POST['tipo'] == 'aberta'){

            $this->vetParam = ['id' => $_POST['id'],
                'idProf' => $_POST['idProf'],
                'idDisc' => $_POST['idDisc'],
                'grau' => $_POST['grau'],
                'texto_questao' => $_POST['texto_questao'],
                'tipo' => $_POST['tipo'],
            ];

            $questao->setIdProf($this->vetParam['idProf']);
            $questao->setIdDisci($this->vetParam['idDisc']);
            $questao->setGrauDifi($this->vetParam['grau']);
            $questao->setTipoQuestao($this->vetParam['tipo']);
            $questao->setTextoQuestao($this->vetParam['texto_questao']);


            $this->gravar = new QuestaoService();
            $this->gravar->gravarQuestao($questao);

        }



    }
}