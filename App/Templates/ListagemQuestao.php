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
                <h3 class="panel-title">Listagem de questões</h3>
            </div>
            <p></p>
            <p></p>
            <div class="panel-body">
                <!-- Main component for a primary marketing message or call to action -->
                <div class="row" >

                    <form class="navbar-form navbar-left" role="search" method="POST" action="#">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Questões">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>

                </div><!-- /.row -->
                <!--
                <c:if test="${cursos == null}">
                    <div class="alert alert-warning" role="alert">Nenhuma busca foi executada.</div>
                </c:if>

                <c:if test="${filtro != null}">
                    <div class="alert alert-info" role="alert"><c:out value="${filtro}"/></div>
                </c:if>

                <c:if test="${operacao != null}">
                    <div class="alert alert-success" role="alert"><c:out value="${operacao}"/></div>
                </c:if>

                <div class="row" >
                    <ul class="nav nav-pills" role="tablist">
                    </ul>
                </div>
                 -->

                <div class="panel panel-default">
                    <!-- Default panel contents -->

                    <!-- Table -->

                    <table class="table table-hover">
                        <?php $id = $_SESSION['prof_id'];
                        $questao = new \App\Model\QuestaoService();  ?>
                        <tbody>
                        <tr>
                            <?php $row = $questao->listarQuestao($id);?>
                            <?php foreach ($row as $chave){?>
                            <td><?php
                                if($chave['tipoQuestao'] == 'fechada' or $chave['tipoQuestao'] =='trueFalse' ){
                                 echo $chave['textoQuestao'].'<br/><br/>';
                                 echo'<strong>a)</strong> '. $chave['Alt1'].'<br/>';
                                 echo'<strong>b)</strong> '. $chave['Alt2'].'<br/>';
                                 echo'<strong>c)</strong> '. $chave['Alt3'].'<br/>';
                                 echo'<strong>d)</strong> '. $chave['Alt4'].'<br/>';
                                 echo'<strong>e)</strong> '. $chave['Alt5'].'<br/>';}
                                 else
                                     echo $chave['textoQuestao'].'<br/><br/>';
                                 ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="20px"><a href="#"><span class="glyphicon glyphicon-trash" style="color:red" title="Excluir"  aria-hidden="true"></span></a></td>
                            <td width="20px"><a href="CadastroDisciplina.php" label= "Editar" ><span class="glyphicon glyphicon-pencil" title="Editar" aria-hidden="true"/></a></td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="CadastroQuestoes.php" label= "Cadastrar" ><span title="Adicionar" class="glyphicon glyphicon-plus" aria-hidden="true"/></a></td>
                        </tr>
                        </tbody>
                    </table>
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

