<?php

   
    $dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

    require $dirProjeto . 'classes/db/MySQL.php';


    $MySQL = new MySQL();
    $DB = $MySQL->connectDB();


    //var_dump($DB);
    // UPDATE DE USER
    $id  = addslashes($_POST['id']);
    $email  = addslashes($_POST['email']);
    $senha  = sha1(addslashes($_POST['senha']));


    $DB->query("UPDATE user SET email = '$email', senha = '$senha' WHERE id = $id");
        if ($DB->affected_rows == 1){
            header('Location: ../list.php');
        }else{
            header('Location: ../list.php');
        }

