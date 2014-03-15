<?php
include "connection.php";

//Get the information from the form
$Firstname = $_POST['firstname'];
$Surname = $_POST['surname'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$query = "INSERT INTO users (firstname, surname, username, email, password) VALUES ('$Firstname','$Surname','$Username','$Email','$Password')";
// execute query
$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());

// print message with ID of inserted record
print "<br />A new record inserted with an ID of " . mysql_insert_id().". And a username of " .$Username;
print "<br /><a href='./login.php'>Click here to go back</a>";

?>