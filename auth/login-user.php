<?php
	require_once '../php_action/db-connect.php';

	session_start();

	if (isset($_SESSION['session_id'])) {
		header('location: dashboard.php');
	}

	if ($_POST) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) || empty($password)) {
			if ($username == "") {
				// echo "";
			}

			if ($password == "") {
				// echo "";
			}
		} else {
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = $connect->query($sql);
			if ($result->num_rows == 1) {
				$password = md5($password);

				// exists
				$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$mainResult = $connect->query($mainSql);

				if ($mainResult->num_rows > 0) {
					$value = $mainResult->fetch_assoc();
					$user_id = $value['id'];
					$user_name = $value['first_name'];
					$user_role = $value['role_id'];

					// set session
					$_SESSION['session_id'] = $user_id;
					$_SESSION['session_name'] = $user_name;
					$_SESSION['session_role'] = $user_role;
					echo "success";
				} else {
					echo "Invalid username or password.";
				}
			} else {
				echo "Username does not exists.";
			}
		}
	}
?>