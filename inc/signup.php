<?php

if (isset($_POST['signup_submit'])) {

	include_once 'connection.php';

	$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);

	// Check for empty fields
	if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {

		header('Location: ../sign-up.php?error=empty');
		exit();

		// Check if input characters are valid
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $first_name) || !preg_match("/^[a-zA-Z0-9]*$/", $last_name)) {

		header('Location: ../sign-up.php?error=invalid');
		exit();

		// Check if email is valid
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		header('Location: ../sign-up.php?error=email&fname='.$first_name.'&lname='.$last_name);
		exit();

	} else if ($password !== $confirm_password) {

		header('Location: ../sign-up.php?error=password&fname='.$first_name.'&lname='.$last_name.'&replaceemail='.$email);
		exit();

	} else {

		$query = "SELECT * FROM users WHERE email = '{$email}'";
		$result = mysqli_query($connection, $query);
		$result_check = mysqli_num_rows($result);

		if ($result_check > 0) {

			header('Location: ../sign-up.php?error=usertaken&fname='.$first_name.'&lname='.$last_name.'&invalidemail='.$email);
			exit();

		} else {

			// Hashing password
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

			// Insert the user into the database
			$query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}')";

			mysqli_query($connection, $query);
			header('Location: ../sign-up.php?signup=success');
			exit();

		}

	}

} else {

	header('Location: ../sign-up.php?signup=error');
	exit();

}

?>