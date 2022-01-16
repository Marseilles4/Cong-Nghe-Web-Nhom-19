<?php
	require_once 'config.php';
	if(ISSET($_REQUEST['email'])){
		$email = $_REQUEST['email'];
		mysqli_query($conn, "UPDATE user_account SET `status` = 'Verified' WHERE `email` = '$email'") or die(mysqli_error());
		header('location:login.php');
	}
?>