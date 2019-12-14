<?php
include($_SERVER['DOCUMENT_ROOT']."/config.php");

if (isset($_REQUEST['reg'])) {
    session_start();

    $query = $db->prepare("INSERT INTO users SET first_name=?, pass=?");

    $query->execute([$_REQUEST['name'], $_REQUEST['password']]);

    header("Location: /resources/views/login.blade");
}
?>