<?php


$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

require $dirProjeto . 'classes/db/MySQL.php';


$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$email = addslashes(($_POST['email']));
$senha = addslashes(($_POST['pass']));

if($email && $senha){
    $senha = sha1($senha);
    $queryLogin = $DB->query("SELECT id FROM user WHERE email = '$email' AND senha = '$senha'");
    if($queryLogin->num_rows == 1){    
        include '../../classes/session/Session.php';
        Session::initSession($email); //inicializando o Metodo, sem precisar do new, mais rapido
         header('Location: ../../index.php');
    }else{
        header('Location: ../../login.php?erro_login=true');
    }
}