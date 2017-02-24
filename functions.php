<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 21/02/17
 * Time: 19:51
 */
/**
 * Verifica se o usuário está logado
 */
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }

    return true;
}