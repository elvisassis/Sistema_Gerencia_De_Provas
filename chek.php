<?php

require_once 'config.php';

if (!isLoggedIn())
{
    header('Location: /SGP/App/Templates/Login.php');
}