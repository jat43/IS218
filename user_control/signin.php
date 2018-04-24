
<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
	<div class="span3">
	    <h2>Sign Up</h2>
	    <form action="index.php" method="post">
	   	<input type="hidden" name="action" value="login">
		    <label>E-mail Address</label>
		    <input type="email" name="email" placeholder="email@email.com" class="span3" required>
		    <label>Password</label>
		    <input type="password" name="password" class="span3" required>
		  	<input type="submit" value="Submit" class="btn btn-primary pull-right">
		    <div class="clearfix"></div>
	    </form>
	    <p><a href="index.php?action=register">Register</a></p>
	</div>
</main>
<?php include '../view/footer.php'; ?>
