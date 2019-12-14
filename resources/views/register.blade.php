<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>

<h1>Register</h1>

<form action="/app/auth/register" method="post">
    <input type="text" name="name">
    <input type="password" name="password">
    <input class="btn btn-primary" type="submit" name="reg" value="Register">
</form>