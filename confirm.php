<?php
	function redirect() {
		header('Location: account-register.php');
		exit();
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect();
	} else {
		include 'db.php';

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM custmors WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE custmors SET isEmailConfirmed=1, token='' WHERE email='$email'");
			echo 'Your email has been verified! You can log in now!';
			header('refresh:1; url=account-login.php');
		} else
			redirect(); 
	}
?>