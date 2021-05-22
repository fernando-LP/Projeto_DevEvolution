<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

//var_dump($dirProjeto);

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_POST['id']);
$modelo = addslashes($_POST['modelo']);
$ano = addslashes($_POST['ano']);
$valor = addslashes($_POST['valor']);


$DB->query("UPDATE carrs SET modelo = '$modelo', ano = '$ano', valor = '$valor' WHERE id = $id");
if ($DB->affected_rows == 1){
    header('Location: ../list.php');
}else{
    header('Location: ../list.php');
}