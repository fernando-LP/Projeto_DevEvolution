
<?php
if($id > 0){
    $dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/evolution/projetoBanco/';

    //var_dump($dirProjeto);

    require $dirProjeto . 'classes/db/MySQL.php';

    $MySQL = new MySQL();
    $DB = $MySQL->connectDB();



    $usuario = $MySQL->getKey($DB, "*", 'user', $id);
    $dadosUsuario = $usuario->fetch_assoc();
}