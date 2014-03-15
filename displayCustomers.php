<?php
include "connection.php";

$query = "SELECT * FROM users";
// execute query
$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());

echo "<table cellpadding=10 border=1>";
echo "<tr><td><b>Firstname</td><td><b>Surname</td><td><b>Username</td><td><b>Email Address</b></td></tr>";
while ($row = mysql_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['firstname'] . "</td>";
	echo "<td>" . $row['surname'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
</p>

</body>
</html>