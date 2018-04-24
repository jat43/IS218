<?php session_start(); ?>
<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
	    <h2>Sign Up</h2>
	    <form action="index.php" method="post">
	   		<input type="hidden" name="action" value="login">
		    <label>E-mail Address</label> <br>
		    <input type="email" name="email" placeholder="email@email.com" required> <br>
		    <label>Password</label> <br>
		    <input type="password" name="password" required> <br>
		  	<input style="margin-top: 5px;" type="submit" value="Submit" class="btn btn-primary pull-right"> <br> 
	    </form>
	    <p style="text-align: left;"><a href="index.php?action=register">Register</a></p>
</main>
<?php include '../view/footer.php'; ?>
