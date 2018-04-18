<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>It's BooKing Good!</h2>


		<img src="booking1.png" alt="Logo"
		style="width:1000px;height:600px;">

		<?php
			//Display a message if the employee is logged in!
			if (isset($_SESSION['u_id'])) {
		header('Location: index2.php'); 
		
		
			}
		?>
		<?php
			//Display a message if the employee is logged in!
			if (isset($_SESSION['u_id'])) {
				echo "BooKing Employee is logged in!";

			}


		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
