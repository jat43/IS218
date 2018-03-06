<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header></header>
	<main>
	<div class="span3">
	    <h2>Sign Up</h2>
	    <form>
		    <label>First Name</label>
		    <input type="text" name="firstname" class="span3">
		    <label>Last Name</label>
		    <input type="text" name="lastname" class="span3">
		    <label>E-mail Address</label>
		    <input type="email" name="email" placeholder="email@email.com" class="span3">
		    <label>Phone Number</label>
		    <input type="number" name="number" placeholder="(###)-###-####" class="span3">
		    <label>Birthday</label>
		    <input type="date" name="date" class="span3">
		    <label>Gender</label>
		    <input type="radio" name="gender" value="male" checked><span>Male</span><br>
  			<input type="radio" name="gender" value="female"><span>Female</span><br>
  			<input type="radio" name="gender" value="other"><span>Other</span><br><br>
		    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
		    <input type="submit" value="Sign up" class="btn btn-primary pull-right">
		    <div class="clearfix"></div>
	    </form>
	</div>
	</main>
	<footer></footer>
</body>
</html>