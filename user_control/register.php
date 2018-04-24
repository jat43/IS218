<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
    <h1>Sign Up</h1>
    <form action="index.php" method="post">
   	<input type="hidden" name="action" value="signup">
	    <label>First Name</label> <br>
	    <input type="text" name="fname" required> <br>
	    <label>Last Name</label> <br>
	    <input type="text" name="lname" required> <br>
	    <label>Password</label> <br>
	    <input type="password" name="password" required> <br>
	    <label>E-mail Address</label> <br>
	    <input type="email" name="email" placeholder="email@email.com" required> <br>
	    <label>Phone Number</label> <br>
	    <input type="number" name="number" placeholder="(###)-###-####" required> <br>
	    <label>Birthday</label> <br>
	    <input type="date" name="date" required> <br>
	    <label>Gender</label> <br>
	    <input type="radio" name="gender" value="male" checked><span>Male</span><br>
			<input type="radio" name="gender" value="female"><span>Female</span><br>
			<input type="radio" name="gender" value="other"><span>Other</span><br>
		    <input type="submit" value="Submit" class="btn btn-primary pull-right"> <br>
    </form>
  	<p><a href="index.php?action=signin">Sign In</a></p>
</main>
<?php include '../view/footer.php'; ?>