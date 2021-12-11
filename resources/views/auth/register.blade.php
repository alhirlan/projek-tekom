<!DOCTYPE html>
<html>
<head>
	<title>Login Form by SiPenDoa SV</title>
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
        <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">
        @csrf
        @if ( Session::get('success'))
			 <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
        @endif
        @if ( Session::get('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
        @endif
				<h2 class="form-title d-block mt-3 mb-2">Sign Up</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input id="name" type="text" class="input" name="name"  autofocus value="{{ old('name') }}">
                              
						<span class="text-danger">@error('name'){{ $message }}@enderror</span>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
					  <i class="fa fa-envelope" aria-hidden="true"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Email</h5>
           		    	<input id="email" type="email" class="input" name="email"  value="{{ old('email') }}">
						<span class="text-danger">@error('email'){{ $message }}@enderror</span>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" type="password" class="input" name="password"  data-eye>
						<span class="text-danger">@error('password'){{ $message }}@enderror</span>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Repeat Password</h5>
           		    	<input id="password-confirm" type="password" class="input" name="password_confirmation" required data-eye>
						<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
            	   </div>
            	</div>
            	<a href="{{route('login')}}">I am already member</a>
            	<button type="submit" class="btn btn-primary btn-block">
                    Register
                </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/mainlogin.js"></script>
</body>
</html>
