<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Baby Shop</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
		<link rel="stylesheet" type="text/css" href="index.css" />
	</head>
	<body>
		<div id="container">
			<div id="header"></div>
			<div id="navcontainer">
				<?php
				include 'navigation.php';
				?>
			</div>
			<div id="wrapper">
				<div id="content">
					<table>
						<form method="get" action="products.php">
							<tr>
								<td>Search by Gender</td>
							</tr>
							<tr>
								<td>
								<select name="byGender">
									<option value="Boy">Boy</option>
									<option value="Girl">Girl</option>
									<option value="%">Both</option>
								</select></td>
								<td>
								<input type="submit" />
								</td>
							</tr>
						</form>
					</table>
					<?php
					//connection to database
					include "connection.php";

					//get variables for product view
					@$byGender = $_GET['byGender'];

					//Create another query to view the new data
					$query = "SELECT * FROM products";

					if (!$byGender == "") {
						$query = $query . " WHERE Gender like '$byGender'";

						$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());

						print '<table align="center" cellpadding="10">';
						print '<tr><th>Item Name</th><th>Price</th><th>Description</th><th>Gender Type</th></tr>';
						while ($row = mysql_fetch_array($result)) {
							print "<tr>";
							print "<td>" . $row['itemname'] . "</td>";
							print "<td>" . $row['itemprice'] . "</td>";
							print "<td>" . $row['itemdescription'] . "</td>";
							print "<td>" . $row['Gender'] . "</td>";
							print '<td><img src="' . $row["photo"] . '" width="120" height="120"/></td>';
							print "</tr>";
						}
					}
					else {
						print "<p>Please select a query option to view products.</p>";
					}
					print "</table>";
					?>
				</div>
			</div>
			<div id="footer">

				<p> All rights reserved - Ahmed Alhamdi - C3347719  &copy; 2012 </p>
			</div>
		</div>
	</body>
</html>
