<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/resources/inc/header.php');
?>

<div class="loginContainer">
    <h1>Login</h1>
    <form action="/app/auth/login.php" method="post">
        <input type="text" name="name">
        <input type="password" name="password">
        <input class="btn btn-primary" type="submit" name="log" value="Login">
    </form>
</div>
