<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 15/02/17
 * Time: 21:02
 */
include __DIR__."/config.php";
include SITE_ROOT . "/App/Control/ProfessorController.php";
use App\Control\ProfessorController;

$teste = new ProfessorController();
$teste->Request();


