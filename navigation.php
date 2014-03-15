<?php //session_start(); ?>
<ul id="navlist">
      <li id="active"><a href="index.php" id="current">Home</a></li>
      <li><a href="about_us.php">About us</a></li>
      <li><a href="products.php">Products</a></li>
       <li><a href="registration.php">Registration</a></li>
        <li><a href="login.php">Login page</a></li>
         <li><a href="contact us.php">Contact us</a></li>
         <li>
         	<?php 
         	
         	if (isset($_SESSION['authenticatedUser'])){
         		echo "Hello user, ".$_SESSION['authenticatedUser'];
				echo "<a href='logout.php'>Log out here</a>";
         	}
			else {
				echo "<a href='login.php'>Please login!</a>";
			}
         	?>
         </li>
	<li>
	<?php
	print "DATE: ".date("D/M/Y");
	print " TIME: ".date("H:i");
	?>
	</li>
    </ul>