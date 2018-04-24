<?php include '../view/header.php'; ?>
<style type="text/css">
    <?php include '../main.css'; ?> 
</style>
<main>
    <!-- display a table of products -->
    <h1>Hello,<?php echo $fname." ".$lname; ?></h1>
    <h2>To-Do List</h2>
    <table>
        <tr>
            <th>Message
                <?php echo $_SESSION["fname"]; ?></th>
            <th>Date Due</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($incomp_results as $list) : ?>
        <tr>
            <td><?php echo $list['message']; ?></td>
            <td><?php echo $list['duedate']; ?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="hidden" name="duedate" value="<?php echo $list['duedate'] ?>">
                     <input type="hidden" name="message" value="<?php echo $list['message'] ?>">
                    <input type="submit" value="Edit">
                </form>
            </td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="done">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="submit" value="Complete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p><a href=".?action=add">Add A New To-Do</a></p>

    <h2>Completed To-Do List</h2>
    <table>
        <tr>
            <th>Message</th>
            <th>Date Due</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($comp_results as $list) : ?>
        <tr>
            <td><?php echo $list['message']; ?></td>
            <td><?php echo $list['duedate']; ?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="hidden" name="duedate" value="<?php echo $list['duedate'] ?>">
                    <input type="submit" value="Edit">
                </form>
            </td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="done">
                    <input type="hidden" name="email" value="<?php echo $list['owneremail'] ?>">
                    <input type="hidden" name="creatD" value="<?php echo $list['createddate'] ?>">
                    <input type="submit" value="Complete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>       
</main>
<?php include '../view/footer.php'; ?>