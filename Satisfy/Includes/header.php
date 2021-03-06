<?php
	include("includes/config.php");
		include("includes/classes/User.php");
		include("includes/classes/Artist.php");
		include("includes/classes/Album.php");
		include("includes/classes/Song.php");
		include("includes/classes/Playlist.php");


	//session_destroy();

	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
		$username = $userLoggedIn->getUsername();
		echo "<script>userLoggedIn = '$username'</script>";
	} else {
		header("Location: register.php");
	}

?>
<html>
<head>
	<title>Welcome to Satisfy!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="includes/assets/css/style.css">
	<script src="includes/assets/js/script.js"></script>
</head>

<body>

<div id="mainContainer">

	<div id="topContainer">
		
		<?php include("includes/navBarContainer.php"); ?>

		<div id="mainViewContainer">
			
			<div id="mainContent">