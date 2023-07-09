<?php

session_start();

if (isset($_POST['signin_submit'])) {

	include_once 'connection.php';

	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	// Check empty fields
	if (empty($email) || empty($password)) {

		header('Location: ../sign-in.php?error=empty');
		exit();

	} else {

		$query = "SELECT * FROM users WHERE email = '{$email}'";
		$result = mysqli_query($connection, $query);
		$result_check = mysqli_num_rows($result);

		if ($result_check < 1) {

			header('Location: ../sign-in.php?error=nouser&email='.$email);
			exit();

		} else {

			if ($row = mysqli_fetch_assoc($result)) {

				// De-hashing password
				$hashed_password_check = password_verify($password, $row['password']);

				if ($hashed_password_check == false) {

					header('Location: ../sign-in.php?error=password&replaceemail='.$email);
					exit();

				} else if ($hashed_password_check == true) {

					// Sign in user here
					$_SESSION['id'] = $row['id'];
					$_SESSION['first_name'] = $row['first_name'];
					$_SESSION['last_name'] = $row['last_name'];
					$_SESSION['email'] = $row['email'];

					header('Location: ../index.php?signin=success');
					exit();

				}

			}

		}

	}

} else {

	header('Location: ../sign-in.php?login=error');
	exit();

}

?>