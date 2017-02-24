<?php include "Header.php";
?>

<div class="panel-group ">
    <div class="panel panel-default ">
        <div class="panel-heading" >
            <h3 class="panel-title">Cadastro de disciplina</h3>
        </div>
        <p></p>
        <p></p>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="../../FrontController.php?class=DisciplinaController">

                <input type="hidden" name="id" value=""/>
                <input type="hidden" name="idProf" value="<?php echo $_SESSION['prof_id']; ?>"/>
                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">Codigo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Digite o código da disciplina" value="">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-sm-2" for="titulo">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite nome da Disciplina" value="">
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="btn-toolbar">
                            <button type="submit" class="btn btn-primary btn pull-right">Gravar</button>
                            <a href="ListagemDisciplina.php" class="btn btn-default btn pull-right">Cancelar</a>
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

<?php include_once "Footer.php";