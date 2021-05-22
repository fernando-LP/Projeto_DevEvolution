<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

//var_dump($dirProjeto);

require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();


$email = addslashes($_POST['email']);
$senha = sha1(addslashes($_POST['senha']));
$confirmar_senha = sha1(addslashes($_POST['confirmar_senha']));



//valida se email já exite no banco
$validaEmail = $DB->query("SELECT id FROM user WHERE email = '$email'");
if($validaEmail->num_rows > 0){
    header('Location: ../new.php?email_existente=true');
    exit;
}



// if($novoUser){
//     $DB->query("UPDATE user SET $novoEmail AND $novaSenha");
// }else{
//     echo "Erro ao Inserir";
// }







if($senha == $confirmar_senha){

    $DB->query("INSERT INTO user (email, senha) VALUES('$email', '$senha')");
    // var_dump($DB);
    // exit;
    if($DB->affected_rows > 0){
        header('Location: ../list.php');
    }else{

        header('Location: ../new.php');
    }

}else{
    header('Location: ../new.php');
}
