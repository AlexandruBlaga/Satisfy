<?php
    include("includes/config.php");
	include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>

<html>
<head>
	<title>Welcome to Satisfy!</title>
	<link rel="stylesheet" href="includes/assets/css/register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="includes/assets/js/register.js"></script>
</head>
<body>
	<?php

		if (isset($_POST['registerButton'])) {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").hide();
						$("#registerForm").show();
					});
				 </script>';
		} else {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").show();
						$("#registerForm").hide();
					});
				 </script>';

		}

	?>
	

	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. alexandrub123"                         value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
						<?php echo $account->getError(Constants::$loginFailed); ?>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here!</span>
					</div>
					
				</form>


				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your free account</h2>
					<p>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="e.g. alexandrub123" value="<?php getInputValue('username') ?>" required>
						<?php echo $account->getError(Constants::$usernameLength); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
					</p>

					<p>
						<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="e.g. Alex" value="<?php getInputValue('firstName') ?>" required>
						<?php echo $account->getError(Constants::$firstNameLength); ?>
					</p>

					<p>
						<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Blaga" value="<?php getInputValue('lastName') ?>" required>
						<?php echo $account->getError(Constants::$lastNameLength); ?>
					</p>

					<p>
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="e.g. 123@example.com" value="<?php getInputValue('email') ?>" required>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
					</p>

					<p>
						<label for="email2">Confirm email</label>
						<input id="email2" name="email2" type="email" placeholder="e.g. 123@example.com" value="<?php getInputValue('email2') ?>" required>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
					</p>

					<p>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Your password" required>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordLength); ?>
					</p>

					<p>
						<label for="password2">Confirm password</label>
						<input id="password2" name="password2" type="password" placeholder="Your password" required>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here!</span>
					</div>
					
				</form>
			</div>

			<div id="loginText">
				<h1>Get great music, right now!</h1>
				<h2>Listen to music for free!</h2>
				<ul>
					<li>Discover music you will fall in love with.</li>
					<li>Create your own playlist.</li>
					<li>Follow artists to keep up to date.</li>
				</ul>
			</div>

		</div>
	</div>

</body>
</html>