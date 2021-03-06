<?php
session_start();
if (isset($_SESSION["user"]))
{
	echo 'Session already created';
	header('refresh:2, url=..\views\home.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>D-Bug</title>
	<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
	<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link rel="shortcut icon" href="..\assets\images\favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="..\assets\login.css">
<!-- Internal CSS -->
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
		}

		h1 {
			color: #BABABA;
			font-weight: bold;
			margin: 0;
		}

		h2 {
			text-align: center;
		}

		p {
			color: black;
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		span {
			color: #BABABA;
			font-size: 12px;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		button {
			border-radius: 20px;
			background-color: #051249;
			border: 1px solid #040E37;
			font-family: 'Audiowide', cursive;
			color: #BABABA;
			font-size: 15px;
			padding: 8px 30px;
			letter-spacing: 1px;
			transition: transform 80ms ease-in;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form name="signup_form" method="POST" action="..\includes\register.php">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social1"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social2"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social3"><i class="fab fa-linkedin-in"></i></a>
				</div>

				<span>or use your email for registration</span>

				<div class="input-icons">
					<i class="fa fa-user icon"></i>
					<input type="text" class = "input_name" name="name" placeholder="Name" pattern="[(A-Z)* (a-z)*]+" 
					title="Should only contain letters" required/>
					<i class="fa fa-envelope icon"></i>
					<input type="email" name="email" placeholder="Email" required/>
					<i class="fa fa-lock icon"></i>
					<input type="password" name="password" class="input_password" placeholder="Password" pattern="^(?=.*[a-z])(?=.+[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" 
					title="Password must contain:
					• At least 1 Uppercase
					• At least 1 Lowercase
					• At least 1 Number
					• At least 1 Symbol, symbol allowed --> !@#$%^&*_=+-
					• Minimum 5 charachters" required/>
					<i class="fa fa-lock icon"></i>
					<input type="password" name="confirm_password" placeholder="Confirm password" required>
				</div>
				<div class="error"></div>
				<button type="submit" onclick="form_submit()">sign up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form name="signin_form" method="POST" action="..\includes\signin.php">
				<img src="..\\assets\\images\logo2.png" alt="logo" style="height: 150px; width: 200px;">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social1"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social2"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social3"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<div class="input-icons"> 
					<i class="fa fa-envelope icon"></i>
					<input type="email" name="signin_email" placeholder="Email" required/>
					<i class="fa fa-lock icon"></i>
					<input type="password" name="signin_password" placeholder="Password" required/>
				</div>  
				<button type="submit" onclick="form_submit_signin()">login</button>
				<a id='forgot-pass' href="#">Forgot your password?</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1 style="color: black;">Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn" style="color: #040E37;">sign in</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 style="color: black;">Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp" style="color: #040E37;">sign up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="..\assets\login.js"></script>
</body>
</html>