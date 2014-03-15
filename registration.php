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
					<h1>Registration</h1>
					<p>
						<a href="customers.php">Display</a> Customer Table
					</p>
					<form method="post" action="registAction.php">
						<h2>Add Customer</h2>
						<p>
							Firstnames
							<input name="firstname" type="text" id="firstname"/>
						</p>
						<p>
							Surname
							<input name="surname" type="text" id="surname"/>
						</p>
						<p>
							Username
							<input name="username" type="text" id="username"/>
						</p>
						<p>
							Email
							<input name="email" type="text" id="email"/>
						</p>
						<p>
							Password
							<input name="password" type="text" id="password" REQUIRED/>
						</p>
						<p>
							<input type="submit" name="submit" value="Submit"/>
						</p>
					</form>
				</div>
			</div>
			<div id="footer">

				<p> All rights reserved - Ahmed Alhamdi - C3347719  &copy; 2012 </p>
			</div>
		</div>
	</body>
</html>
