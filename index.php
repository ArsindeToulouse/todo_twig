<?php
require_once "start.php";
use Core\User\User;

if (!empty($_POST['newlogin']) && !empty($_POST['newpassword'])) {
	$user = new User($pdo);
	$user_id = $user->addNewUser($_POST['newlogin'], $_POST['newpassword']);

	$_SESSION['id'] = $user_id;

	header("Location: todo.php");

}elseif (!empty($_POST['login']) && !empty($_POST['password'])) {
	$user = new User($pdo);
	$user_id = $user->checkUser($_POST['login'], $_POST['password']);

	$_SESSION['id'] = $user_id;

	($user_id) ? header('Location: todo.php') : header('Location: index.php');

}else{
	echo $twig->render('temp_index.tw');
}