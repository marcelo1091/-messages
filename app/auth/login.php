<?php

include($_SERVER['DOCUMENT_ROOT']."/config.php");

if( isset($_REQUEST['log']) ){
    $query = $db->prepare("SELECT * from users WHERE first_name ='".$_REQUEST['name']."' AND pass ='".$_REQUEST['password']."'");
    $query->execute();

    $rs = $query->fetchAll(PDO::FETCH_OBJ);

    if ( count($rs) == 1) {
        foreach ($rs as $r) {
            session_start();

            $_SESSION['user'] = $r->first_name;
        }
           header("Location: /index.php");
    }else{
    header("Location: /resources/views/login.blade.php");
    }
}
?>