<?php include_once "Header.php";
include_once SITE_ROOT."/App/Model/QuestaoService.php"?>
    <!-- MODAL -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-title" id="gridSystemModalLabel">Título</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div id="modal-text" class="col-md-10">Mensagem</div>
                    </div>
                </div>
                <div class="modal-footer" id="modal-buttons">

                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <div class="panel-group ">
        <div class="panel panel-default ">
            <div class="panel-heading" >
                <h3 class="panel-title">Prova</h3>
            </div>
            <p></p>
            <p></p>
            <div class="panel-body">


                <div class="panel panel-default">
                    <!-- Default panel contents -->

                    <!-- Table -->

                    <table class="table table-hover">
                        <thead>
                        <p align="center"><?php echo $_POST['instituicao'].'<br/>';?></p>
                        <p align="center"><?php echo "Professor: ". $_SESSION['prof_name'];?><p/>
                        <p align="center"><?php echo $_POST['periodo'].'<br/>';?></p>
                        <p align="left">Aluno:__________________________Data: __/__/__     Nota:_____</p>
                        </thead>
                        <?php $id = $_SESSION['prof_id'];
                              $idDisc = $_POST['idDisc'];
                        $prova = new \App\Model\QuestaoService();  ?>
                        <tbody>
                        <tr>
                            <?php $row = $prova->gerarProva($id,$idDisc);?>
                            <?php foreach ($row as $chave => $valor){?>
                            <td><?php $i=1;
                                if($valor['tipoQuestao'] == 'fechada' or $valor['tipoQuestao'] =='trueFalse' ){
                                    echo $chave+1 .') '. $valor['textoQuestao'].'<br/><br/>';
                                    echo'<strong>a)</strong> '. $valor['Alt1'].'<br/>';
                                    echo'<strong>b)</strong> '. $valor['Alt2'].'<br/>';
                                    echo'<strong>c)</strong> '. $valor['Alt3'].'<br/>';
                                    echo'<strong>d)</strong> '. $valor['Alt4'].'<br/>';
                                    echo'<strong>e)</strong> '. $valor['Alt5'].'<br/>';}
                                else
                                    echo  $chave+1 .') '.$valor['textoQuestao'].'<br/><br/>';
                                ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="20px"><a href="#"><span class="glyphicon glyphicon-trash" style="color:red" title="Excluir"  aria-hidden="true"></span></a></td>
                            <td width="20px"><a href="Prova.php" label= "Editar" ><span class="glyphicon glyphicon-pencil" title="Editar" aria-hidden="true"/></a></td>
                        </tr>
                        <?php  }?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group" >
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="btn-toolbar">
                                <button type="submit" class="btn btn-primary btn pull-right">Confirmar</button>
                                <a href="ListagemDisciplina.php" class="btn btn-default btn pull-right">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>



        function confirmarExclusao(id, nome) {
            $('#modal-title').html("Confirmação de Exclusão");
            $('#modal-text').html("Deseja excluir " + nome + "?");
            $('#modal-buttons').html("<button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button><button type= 'button' onclick='excluir(" + id + ")' class='btn btn-primary'>Excluir</button>");
            $('#myModal').modal('show');
        }

        function excluir(id) {
            $(location).attr('href', "listagemCurso.do?idDelete=" + id);
        }
    </script>
<?php include_once "Footer.php";

