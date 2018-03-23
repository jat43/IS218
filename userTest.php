<?php 

require 'user.php';

$jat = new User("sql.njit.edu", "jat43", "deploy97", "jat43");

$jat->returnData();

echo "<br>";
echo "<h1>Initial Display of data</h1><br>";
$jat->display();
echo "<br>";
$jat->insert();
echo "<br>";
$jat->delete();
echo "<br>";
$jat->update();

?>