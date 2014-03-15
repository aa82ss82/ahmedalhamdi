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
					<h1>View Customers</h1>
					<p>
						<?php include 'displayCustomers.php'; ?>
					</p>
				</div>
			</div>
			<div id="footer">
				<p> All rights reserved - Ahmed Alhamdi - C3347719  &copy; 2012 </p>
				
			</div>
		</div>
	</body>
</html>
