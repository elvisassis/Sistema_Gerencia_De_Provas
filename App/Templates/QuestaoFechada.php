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
                <input type="hidden" name="tipo" value="fechada"/>
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

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">a) <input type="radio" name="gabarito" value="alt1"></label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="alt1" id="alt1" placeholder="Digite a questao" value=""></textarea>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">b) <input type="radio" name="gabarito" value="alt2"></label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="alt2" id="alt2" placeholder="Digite a questao" value=""></textarea>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">c) <input type="radio" name="gabarito" value="alt3"></label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="alt3" id="alt3" placeholder="Digite a questao" value=""></textarea>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">d) <input type="radio" name="gabarito" value="alt4"></label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="alt4" id="alt4" placeholder="Digite a questao" value=""></textarea>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">e) <input type="radio" name="gabarito" value="alt5"></label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="alt5" id="alt5" placeholder="Digite nome da Disciplina" value=""></textarea>
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