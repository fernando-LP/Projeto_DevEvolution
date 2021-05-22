<?php

// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$veiculos = $MySQL->getALL($DB,'carrs');

