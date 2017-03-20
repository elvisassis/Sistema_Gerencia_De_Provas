<?php include_once "Header.php";
include_once SITE_ROOT."/App/Model/DisciplinaService.php"?>
    <div class="panel-group ">
        <div class="panel panel-default ">
            <div class="panel-heading" >
                <h3 class="panel-title">Provas</h3>
            </div>
            <p></p>
            <p></p>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="Prova.php">
                    <input type="hidden" name="id" value=""/>
                    <input type="hidden" name="idProf" value="<?php echo $_SESSION['prof_id']; ?>"/>

                    <div class="form-group ">
                        <label class="control-label col-sm-2" for="titulo">Selecione o tipo de prova</label>
                        <div class="col-sm-4">
                            <select name="tipo_questao" class="form-control">
                                <option value="automatica">Automatica</option>
                                <option value="manual">Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2" for="titulo">Disciplina</label>
                        <div class="col-sm-4">
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
                        <label class="control-label col-sm-2" for="titulo">Instituicao</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="instituicao" id="instituicao" placeholder="Instituicao de ensino" value="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2" for="titulo">Perido Letivo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="periodo" id="periodo" placeholder="Ex: 2016/2" value="">
                        </div>
                    </div>

                    <div class="form-group" >
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="btn-toolbar">
                                <button type="submit" class="btn btn-primary btn pull-right">Ok</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".close").click(function () {
                $("#myAlert").alert("close");
            });
        });
    </script>

<?php include "Footer.php";

