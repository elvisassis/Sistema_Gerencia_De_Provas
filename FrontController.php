<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 22/02/17
 * Time: 19:14
 */
include_once "config.php";
include_once SITE_ROOT."/App/Control/ProfessorController.php";
include_once SITE_ROOT."/App/Control/DisciplinaController.php";

use App\Control\ProfessorController;
use App\Control\DisciplinaController;

if($_GET['class'] == "ProfessorController" ) {

    $class = $_GET['class'];

    $pagina = new ProfessorController();
    $pagina->Request();
    header("Location: /SGP/App/Templates/Login.php");

}

else if($_GET['class'] == "DisciplinaController"){

    $class = $_GET["class"];

    $pagina = new DisciplinaController();
    $pagina->Request();
    header("Location: /SGP/App/Templates/ListagemDisciplina.php");
}