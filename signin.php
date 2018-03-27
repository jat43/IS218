<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
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
	    <form action="doStuff.php" method="post">
		    <label>E-mail Address</label>
		    <input type="email" name="email" placeholder="email@email.com" class="span3" required>
		    <label>Password</label>
		    <input type="password" name="password" class="span3" required>
		  	<input type="submit" value="Submit" class="btn btn-primary pull-right">
		    <div class="clearfix"></div>
	    </form>
	</div>
	</main>
	<footer></footer>
</body>
</html>