<?php session_start(); ?>
<?php include '../view/header.php'; ?>
<style type="text/css">
	<?php include '../main.css'; ?>	
</style>
<main>
    <h2>Edit this To-Do List Item</h2>
	<div>
		<form action="." method="post">
        <input type="hidden" name="action" value="edit_item">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="creatD" value="<?php echo $createddate; ?>">
        <label>Due Date</label> <br>
        <input type="text" name="duedate" value="<?php echo $duedate; ?>" required> <br>
        <label>Message</label> <br>
        <input type="textarea" name="message" value="<?php echo $message; ?>" required> <br>
        <input type="submit" value="Submit Edit" class="btn btn-primary pull-right"> <br>
    </form>
	  	<p><a href="index.php?action=add_item">See To-Do List</a></p>
	</div>
</main>
<?php include '../view/footer.php'; ?>