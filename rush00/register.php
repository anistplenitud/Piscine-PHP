<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Rush 00</title>
<script>
function validateForm() {

	function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
	var x = document.forms["signup_form"]["username"].value;
    if (x == "") {
        alert("Username must be filled out");
        return false;
    }
	
    var x = document.forms["signup_form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    var x = document.forms["signup_form"]["surname"].value;
    if (x == "") {
        alert("Surname must be filled out");
        return false;
    }
    var x = document.forms["signup_form"]["email"].value;

    if (!validateEmail(x)) {
        alert("E-mail address not valid");
        return false;
    }
    var x = document.forms["signup_form"]["phone"].value;
    var re = /^[0-9]{10}$/;

    if (!re.test(x))
    {
    	alert("Phone Number not valid");
        return false;	
    } 

    var x = document.forms["signup_form"]["id_no"].value;
    var re = /^[0-9]{13}$/;

    if (!re.test(x))
    {
    	alert("ID Number not valid");
        return false;	
    } 
	
	var x = document.forms["signup_form"]["password"].value;
	var c_x = document.forms["signup_form"]["c_password"].value;

	if (x !=  c_x)
	{
		alert("Passwords do not match");
		return false;
	}
}
</script>
</head>
<body>

<div id="logo_banner">
	<H1 id = "shop_title">Logo</H1>
	<div id = "nav">
		<ul>
			<li><a href="checkout.php"><img src="cart.png" width="20vw" height="20vw"></a></li>
			<li><a href="index.php">Back To Store</a></li>
		</ul>
	</div>
</div>
<form action="login.php" method="post" id = "login_form">
		<div id="login_div">
		<div class="left_float">
		<label id = "label_email" class="login_label">Username</label> <br>
		<input type="text" name="username">
		</div>
		<div class="left_float">
		<label id = "label_password" class="login_label">Password</label> <br>
		<input type="text" name="password">
		</div>
		<input id="login_submit" type="submit" name="login_submit" value="Log In">
		</div>
</form>

<div id="login_OAuth">
	<img id="ad_1" src="foot.jpg">
</div>
<form name="signup_form" action="signup.php" method="post" onsubmit="return validateForm()">

	<div id = "signup_form">
		<h1 id ="signup_header"> Easy Sign Up &  Quick Checkout !! </h1>
			<br />
		<div id ="signup_inputs">
			<div id = "group1">	
				<label >Name : </label> <br />
				<input class="signup_inputs"type="text" name="name">
				<br />
			</div>
			<div id = "group2">
				<label>Surname : </label> <br />
				<input class="signup_inputs" type="text" name="surname">
					<br />
			</div>
			<div id = "group3">
				<label>Phone Number</label><br />
				<input class="signup_inputs" type="text" name="phone">
					
			</div>
			<div id ="group4">
				<label>E- Mail :</label> <br />
				<input class="signup_inputs" type="text" name="email">
					
			</div>
			<div id = "group5">
				<label>ID Number :</label> <br />
				<input class="signup_inputs" type="text" name="id_no">
					<br />
			</div>
			<div id = "group6">
				<label>Username :</label> <br />
				<input class="signup_inputs" type="text" name="username">
				
				
			</div>
			<div id = "group7">
				<label>Enter Password :</label>
				<input class="signup_inputs" type="password" name="password">
					<br />
			</div>
			<div id = "group8">
				<label>Confirm Password :</label>
				<input class="signup_inputs" type="password" name="c_password">
					<br />
			</div>
			<input id="signup_btn" type="submit" name="submit" value="Sign Up">
		
	</div>
</form>
	
</div>

</body>
</html>