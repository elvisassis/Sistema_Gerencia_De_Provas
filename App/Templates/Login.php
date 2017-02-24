<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Sistema de gerência de provas</title>
    <link href="../bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap-3.3.7/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../bootstrap-3.3.7/css/signin.css" rel="stylesheet">
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
    <script src="../bootstrap-3.3.7/js/ie-emulation-modes-warning.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="../bootstrap-3.3.7/js/vendor/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="cadastro" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Faça seu cadastro no sistema</h4>
                </div>
                <div class="modal-body">
                    <form class="form-signin" action="../../FrontController.php?class=ProfessorController" method="POST" >
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="inputEmail" class="sr-only">Endereço de Email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Digite o Email"  autofocus>
                            <label for="inputEmail" class="sr-only">Endereço de Email</label>
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome"  autofocus>
                            <label for="inputNome" class="sr-only">Senha</label>
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite a Senha" >
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <form class="form-signin" action="../../login.php" method="POST" >

        <div class="form-group">

            <!---->
            <h2 class="form-signin-heading">Por favor faça o login</h2>
            <input type="hidden" name="id" value="">
            <label for="inputEmail" class="sr-only">Endereço de Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Digite o Email"  autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite a Senha" >
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#cadastro">Cadastrar-se</button>
        </div>
    </form>



</div> <!-- /container -->




<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/js/vendor/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>
