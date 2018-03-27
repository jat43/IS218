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
	    <form action="doStuff.php" method="post">
		    <label>First Name</label>
		    <input type="text" name="fname" class="span3" required>
		    <label>Last Name</label>
		    <input type="text" name="lname" class="span3" required>
		    <label>Password</label>
		    <input type="password" name="password" class="span3" required>
		    <label>E-mail Address</label> <?php echo $emailerror; ?>
		    <input type="email" name="email" placeholder="email@email.com" class="span3" required>
		    <label>Phone Number</label>
		    <input type="number" name="number" placeholder="(###)-###-####" class="span3" required>
		    <label>Birthday</label>
		    <input type="date" name="date" class="span3" required>
		    <label>Gender</label>
		    <input type="radio" name="gender" value="male" checked><span>Male</span><br>
  			<input type="radio" name="gender" value="female"><span>Female</span><br>
  			<input type="radio" name="gender" value="other"><span>Other</span><br>
 		    <input type="submit" value="Submit" class="btn btn-primary pull-right">
		    <div class="clearfix"></div>
	    </form>
	</div>
	</main>
	<footer></footer>
</body>
</html>