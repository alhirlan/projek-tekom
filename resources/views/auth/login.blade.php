<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="images/bidongnih.png">
	<div class="container">
		<div class="img">
			<img src="images/g2.png">
		</div>
		<div class="login-content">
			<form method="POST" autocomplete="off" action="{{ route('login') }}">
			@csrf
				<img src="images/avatar.svg">
				<h2 class="title">Sign In</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input id="email" type="email" class="input" name="email" value="" required autofocus>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" type="password" class="input" name="password" required data-eye>
            	   </div>
            	</div>
            	<a href="{{route('password.request')}}" class="float-right">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/mainlogin.js"></script>
</body>
</html>
