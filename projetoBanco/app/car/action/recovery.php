<?php

if($id > 0){

    $dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

    //var_dump($dirProjeto);

    require $dirProjeto . 'classes/db/MySQL.php';

    $MySQL = new MySQL();
    $DB = $MySQL->connectDB();

    $veiculo = $MySQL->getKeyVeiculos($DB, "*", 'carrs', $id);
    $dadosVeiculo = $veiculo->fetch_assoc();
}