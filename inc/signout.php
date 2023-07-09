<?php

if (isset($_POST['signout_submit'])) {

	session_start();
	session_unset();
	session_destroy();
	header('Location: ../index.php');
	exit();

}

?>