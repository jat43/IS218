<?php session_start(); ?>
<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
	<div>
		<form action="." method="post">
        <input type="hidden" name="action" value="add_item">
        <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
        <label>Due Date</label> <br>
        <input type="date" name="duedate" required> <br>
        <label>Message</label> <br>
        <input type="text" name="message" required> <br>
        <input type="submit" value="Add" class="btn btn-primary pull-right"> <br>
    </form>
	  	<p><a href="index.php?action=add_item">See To-Do List</a></p>
	</div>
</main>
<?php include '../view/footer.php'; ?>