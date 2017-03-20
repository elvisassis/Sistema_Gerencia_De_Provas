<?php include_once "Header.php";
include_once SITE_ROOT."/App/Model/DisciplinaService.php"?>
<div class="panel-group ">
    <div class="panel panel-default ">
        <div class="panel-heading" >
            <h3 class="panel-title">Cadastro de questões</h3>
        </div>
        <p></p>
        <p></p>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="../../FrontController.php?class=QuestaoController">
                <input type="hidden" name="id" value=""/>
                <input type="hidden" name="tipo" value="aberta"/>
                <input type="hidden" name="idProf" value="<?php echo $_SESSION['prof_id']; ?>"/>
                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">Disciplina</label>
                    <div class="col-sm-2">
                        <?php $id = $_SESSION['prof_id'];
                        $disciplina = new \App\Model\DisciplinaService();
                        $row = $disciplina->listarDisciplina($id);
                        $disciplina = new \App\Model\DisciplinaService();  ?>
                        <select name="idDisc" class="form-control">
                            <?php foreach ($row as $chave){ ?>
                            <option value="<?php echo $chave['idDisc'];?>"><?php echo $chave['nomeDisci'];?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">Grau de dificuldade</label>
                    <div class="col-sm-3">
                        <label> baixo <input type="radio" class="" name="grau" id="grau" value="baixo"></label>
                        <label> medio <input type="radio" class="" name="grau" id="grau" value="medio"></label>
                        <label> alto <input type="radio" class="" name="grau" id="grau" value="alto"></label>
                    </div>
                </div>

                <div class="form-group" id="textAreaId">
                    <label class="control-label col-sm-2" for="titulo">Texto da questão:</label>
                    <div class="col-sm-7">
                        <textarea class="form-control"  name="texto_questao" id="texto_questao" placeholder="Digite o texto da questao" value=""></textarea>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="btn-toolbar">
                            <button type="submit" class="btn btn-primary btn pull-right">Gravar</button>
                            <a href="ListagemQuestao.php" class="btn btn-default btn pull-right">Cancelar</a>
                        </div>
                    </div>
                </div>