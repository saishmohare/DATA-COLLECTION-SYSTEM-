<!DOCTYPE HTML>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale:1.0">
<title>Student-Analytics</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style4.css">
<script src="myScript.js"></script>
</head>

<body>

<div class="header">
	<div class="logo">
		<a href="#"><img src="logo.jpeg"></a>
	</div>
	<ul>
		
		
		<li><a href="howto.html">How To</a></li>
		<li class="SignUp"><a href="A:\Programming Files\Project X\Register\signup1.html" color="white">Sign Up</a></li>
	</ul>
</div>

<div class="back">
	
	<form class="login"	action="logincontroller2.php" name="login" onsubmit="checkEmpty()" method="post" style="float:right; ">
		<input type="email" name="username" placeholder="Enter Your Username"><br><br>
		<input type="password" name="password" placeholder="Enter Your Password"><br><br>
		<p class="forgot"><a href="#">Forgot Password?</a></p>
		<input type="Submit" name="Sign In" value="Teacher Sign In" onclick="foobar()"><br><br>
		<p class="forgot">New User?     <a href="signup1.html">Register here</a></p>
	</form>
	
    <div class="vertical-line" style="height:180px;" />
    
	<form class="login"	action="logincontroller1.php" name="login" onsubmit="checkEmpty()" method="post" style="float:right; margin-right: 400px;">
		<input type="email" name="username" placeholder="Enter Your Username"><br><br>
		<input type="password" name="password" placeholder="Enter Your Password"><br><br>
		<p class="forgot"><a href="#">Forgot Password?</a></p>
		<input type="Submit" name="Sign In" value="Student Sign In" onclick="foobar()"><br><br>
		<p class="forgot">New User?     <a href="signup1.html">Register here</a></p>
	</form>
	
</div>

<!--<div class="feat"><a name="here"></a>

	<div class="attendance">
		<div class="text1">
			<p class="attHead">Attendance</p>
			<br><br>
			<p class="attText">Who attended your lecture.<br>Find out who didn't</p>
		</div>
		
		<div class="img1">
			<img src="bar.png">
		</div>
	</div>
	
</div>-->

</body>

</html>