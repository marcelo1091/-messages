<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>

<h1>Register</h1>

<form action="../../app/auth/register.php" method="post">
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="submit" name="reg" value="Register">
</form>