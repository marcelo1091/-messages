<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="resources/css/style.css" type="text/css" />
	<title>Document</title>
</head>

<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location: /resources/views/login.blade");
}else{
	header("Location: /resources/views/messages.blade");
}
?>

