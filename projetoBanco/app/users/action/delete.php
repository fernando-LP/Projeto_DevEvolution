<?php


$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = $_GET['id'];
$MySQL->deleteUser($DB, 'user', $id);
header('Location: ../list.php');