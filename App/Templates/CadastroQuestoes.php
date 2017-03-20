<?php include "Header.php" ?>
    <div class="panel-group ">
        <div class="panel panel-default ">
            <div class="panel-heading" >
                <h3 class="panel-title">Cadastro de questões</h3>
            </div>
            <p></p>
            <p></p>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="Questao.php">

                    <input type="hidden" name="id" value=""/>
                    <input type="hidden" name="idProf" value="<?php echo $_SESSION['prof_id']; ?>"/>
                    <div class="form-group ">
                        <label class="control-label col-sm-2" for="titulo">Tipo de questao:</label>
                        <div class="col-sm-2">
                            <select name="tipo_questao" class="form-control">
                                <option value="fechada">Fechada</option>
                                <option value="aberta">Aberta</option>
                                <option value="V ou F">V ou F</option>
                            </select>
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

