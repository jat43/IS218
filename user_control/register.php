<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
	<div class="span3">
	    <h2>Sign Up</h2>
	    <form action="index.php" method="post">
	   	<input type="hidden" name="action" value="signup">
		    <label>First Name</label>
		    <input type="text" name="fname" class="span3" required>
		    <label>Last Name</label>
		    <input type="text" name="lname" class="span3" required>
		    <label>Password</label>
		    <input type="password" name="password" class="span3" required>
		    <label>E-mail Address</label>	    
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
	  	<p><a href="index.php?action=signin">Sign In</a></p>
	</div>
</main>
<?php include '../view/footer.php'; ?>