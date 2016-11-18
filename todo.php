<?php
require_once "start.php";
use Core\User\User;
use Core\Task\Tasks;

$user = new User($pdo);
$user->setUser($_SESSION['id']);

$tasks = new Tasks($pdo, $user);

if (!empty($_POST['login_select'])) {
	$tasks->changeAssignedUser($_POST['login_select'], $_POST['select_user_button']);
}
if (!empty($_POST['addTask'])) {
	$result = $tasks->addNewTask($_POST['addTask']);
}

if (!empty($_GET)) {
	if (isset($_GET['id'])){
		if(isset($_GET['step'])){
			if ($_GET['step'] === 'done') {
				$tasks->setDoneTask($_GET['id']);
			}
		}
		
	}
}

$loginRows = $user->getLoginRows();
$assignedTasksRows = $tasks->getAssinedTasksRows($user);

if (isset($_POST['sort_by'])) {
	$tasksRows = $tasks->getUserTasksOrderRows($_POST['sort_by']);
}else{
	$tasksRows = $tasks->getUserTasksRows();
}

$params = array(
		'tasks_rows' => $tasksRows,
		'logins_rows' => $loginRows,
		'assigned_tasks_rows' => $assignedTasksRows,
		'session' => $user->getUserLogin()
	);

echo $twig->render('temp_todo.tw', $params);
