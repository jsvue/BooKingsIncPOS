<?php
	include_once 'header2.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<img src="booking1.png" alt="Logo"
		style="width:200px;height:100px;">
		<h2>New Customer Sales</h2>


		

		<?php
			//Display a message if the employee is logged in!
			if (isset($_SESSION['u_id'])) {
				echo "BooKing Employee view Customer:";

				?>
<br><br>
<a href="http://localhost/myfiles/Customer%20Info/">Customer Login</a>
<br><br>
<a href="http://localhost/myfiles/Newbooks/newbooks.php">New Books</a>
<br><br>
<a href="http://localhost/myfiles/Accountreview/accountreview.php">Review Account</a>
<br><br>
<a href="http://localhost/myfiles/shipping/Shipping.php">Shipping</a>
<br><br>
<a href="http://localhost/myfiles/shoppingCart/cart.html">Shopping Cart</a>
<br><br>
<a href="http://localhost/myfiles/Contactform/index.php?mailsend">Employee HelpDesk</a>
<br><br>


<?php

			}


		
?>


 
   

<?php
	include_once 'footer.php';
?>
