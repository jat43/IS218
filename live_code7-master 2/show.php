<?php
require 'db.php' ;
$sql = "select id, email, fname, password from accounts";
$results = runQuery($sql);
if(count($results) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Pass</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["password"]."</td></tr>";
	}
	
}else{
    echo '0 results';
}


echo "<br><br>";
$sql = "select id, email, fname, password from accounts where id < 6";
$results = runQuery($sql);
echo "<span>answer for question 2 below</span><br>
		<span># of results: " . count($results) . "<span><br>";
echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Pass</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["password"]."</td></tr>";
	}

?>