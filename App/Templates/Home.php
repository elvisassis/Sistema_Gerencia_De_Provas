<?php include "Header.php"; ?>

    <div class="jumbotron text-center">
        <h1>Sistema De Gerência De Provas</h1>
        <p>Bem vindo <?php echo $_SESSION['prof_name']; ?> ao Sistema de gêrencia de provas!</p>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4">
                 <img src="../Images/prova1.png" class="img-rounded" alt="Prova" width="100 height="100">
            </div>
            <div class="col-sm-4">
                <img src="../Images/gabarito.png" class="img-rounded" alt="Prova" width="100" height="100">
            </div>
            <div class="col-sm-4">
                <img src="../Images/exercicio.png" class="img-rounded" alt="Prova" width="100" height="100">
            </div>
        </div>
    </div>



<?php include "Footer.php";