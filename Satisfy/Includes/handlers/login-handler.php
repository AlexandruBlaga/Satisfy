<?php
if(isset($_POST['loginButton'])) {
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	//log in function

	$result = $account->login($username, $password);

	if ($result === true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");					
	}
}
?>