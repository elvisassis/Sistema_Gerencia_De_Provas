<?php
session_start();
ob_start();
/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
    $dompdf = new DOMPDF();

    echo '<p align="center" style="margin-bottom: 0;">'. $_POST['instituicao'];
    echo '<p align="center" style="margin-top: 0;">'. $_POST['dep'];
    echo '<p align="center">'. $_POST['periodo'];
    echo '<p>Professor: '.$_SESSION['prof_name'].'</p>';
    echo '<p>Curso:____________________________________________________________</p>';
    echo '<p>Aluno:____________________________________________________________</p>';
    echo '<p>Matricula:________________&nbsp;&nbsp;Data&nbsp;____/&nbsp;____/&nbsp;____&nbsp;&nbsp;Turma:_______________</p><br/>';
    $row = $_SESSION['provaPdf'];
foreach ($row as $chave => $valor){
    if($valor['tipoQuestao'] == 'fechada' or $valor['tipoQuestao'] =='trueFalse' ) {
        echo '<table>';
        echo '<tr>';
        echo '<td>';
        echo  $chave+1 .' - '.$valor['textoQuestao'].'<br/>';
        echo '<strong>a)</strong> ' . $valor['Alt1'] . '<br/>';
        echo '<strong>b)</strong> ' . $valor['Alt2'] . '<br/>';
        echo '<strong>c)</strong> ' . $valor['Alt3'] . '<br/>';
        echo '<strong>d)</strong> ' . $valor['Alt4'] . '<br/>';
        echo '<strong>e)</strong> ' . $valor['Alt5'] . '<br/><br/>';
        echo '</td>';
        echo '</tr>';
        echo '</table>';
    }else
            echo  $chave+1 .') '.$valor['textoQuestao'].'<br/><br/>';
}

$saida = ob_get_contents();
ob_end_clean();
    /* Carrega seu HTML */
    $dompdf->load_html($saida);

    /* Definimos o tamanho do papel e
     sua orientação (retrato ou paisagem) */
    $dompdf->set_paper('A4','portrait');

    /* Renderiza */
    $dompdf->render();

    /* Exibe */
    $dompdf->stream(
        "saida.pdf", /* Nome do arquivo de saída */
        array(
            "Attachment" => true /* Para download, altere para true */
        )
    );



