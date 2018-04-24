<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
	<div>
		<form action="." method="post">
        <input type="hidden" name="action" value="add_item">
        <input type="hidden" name="email" value="<?php echo $_SESSION["email"]; ?>">
        <label>Due Date</label>
        <input type="date" name="duedate" required>
        <label>Message</label>
        <input type="textbox" name="message" required>
        <input type="submit" value="Add">
    </form>
	  	<p><a href="index.php?action=add_item">See To-Do List</a></p>
	</div>
</main>
<?php include '../view/footer.php'; ?>