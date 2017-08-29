<?php
	require_once '../php_action/db-connect.php';

	if ($_POST) {
		$role = $_POST['iCheck'];
		if ($role == 3) {
			$role = $_POST['iCheck'];
			$first_name = trim($_POST['first_name']);
			$middle_name = trim($_POST['middle_name']);
			$last_name = trim($_POST['last_name']);
			$civil_status = $_POST['civil_status'];
			$contact_number = $_POST['contact_number'];
			$birth_date = $_POST['birth_date'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$username = trim($_POST['username']);
			$email = trim($_POST['email']);
			$password = trim(md5($_POST['password']));

			date_default_timezone_set("Asia/Manila");
			$timestamp = date("Y-m-d h:i:s");

			if ($_POST['ext'] == "") {
				$ext = null;
			} else {
				$ext = $_POST['ext'];
			}

			$sql = "INSERT INTO users (role_id, username, password, email, first_name, middle_name, last_name, ext, civil_status, contact_number, birth_date, gender, barangay_id, created_at) VALUES ('$role', '$username', '$password', '$email', '$first_name', '$middle_name', '$last_name', '$ext', '$civil_status', '$contact_number', '$birth_date', '$sex', '$address', '$timestamp')";
		}

		if ($role == 4) {
			$role = $_POST['iCheck'];
			$first_name = trim($_POST['first_name']);
			$middle_name = trim($_POST['middle_name']);
			$last_name = trim($_POST['last_name']);
			$username = trim($_POST['username']);
			$email = trim($_POST['email']);
			$password = trim(md5($_POST['password']));
			$job_title = $_POST['job_title'];
			$license_number_nurse = trim($_POST['license_number_nurse']);

			date_default_timezone_set("Asia/Manila");
			$timestamp = date("Y-m-d h:i:s");

			if ($_POST['ext'] == "") {
				$ext = null;
			} else {
				$ext = $_POST['ext'];
			}

			$sql = "INSERT INTO users (role_id, username, password, email, first_name, middle_name, last_name, ext, job_title, license_number, created_at) VALUES ('$role', '$username', '$password', '$email', '$first_name', '$middle_name', '$last_name', '$ext', '$job_title', '$license_number_nurse', '$timestamp')";
		}

		if ($connect->query($sql)) {
			echo "success";
		} else {
			echo "Error while registering user!";
		}

		$connect->close();
	}