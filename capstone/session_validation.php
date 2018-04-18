<?php
	/**
	 * Returns true if user has a valid
	 * session else false
	 */
	function sessionExists() {
		if ((isset($_SESSION['valid_user'])) && (($_SESSION['valid_user']) != null))  {
			return true;
		}
		else {
			return false;
		}
	}
	/**
	 * Returns true if user has a valid session
	 * and if the user is an admin
	 */
	function adminSessionExists() {
		if ((isset($_SESSION['valid_admin'])) && (($_SESSION['valid_admin']) != null)) {
			return true;
		}
		else{
			return false;
		}
	}
	/**
	 * Generates topnav to display admin topnav
	 * if admin is logged in else displays
	 * normal navbar
	 */
	function getTopNav() {
		$topNav = "";
		if (adminSessionExists()) {
			$topNav = '    <nav class="navbar navbar-default" role="navigation">
  	<div class="container">
  	  <div class="navbar-header">
		<a href="index.php"><img class="logo" src="./icons/image1.png" /></a>
	  	<div class="name-wrapper">
	  	  <font class="nav-font">BooKings INC</font>
	  	</div>
	  </div>
  	</div>
  	
  	<div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
	  	<li><a class="button icon" href="trains.php"><img class="icon" src="./icons/image4.png" />Home Page</a></li>
	  	<li><a class="button icon" href="org_list.php"><img class="icon" src="./icons/image2.png" />Org</a></li>
	  	<li><a class="button icon" href="capacity.php"><img class="icon" src="./icons/image6.png" />Capacity</a></li>
		<li><a class="button icon" href="training.php"><img class="icon" src="./icons/image10.png" />Training</a></li>
		<li><a class="button icon" href="reporst.php"><img class="icon" src="./icons/image5.png" />Reports</a></li>
		<li><a class="button icon" href="admin.php"><img class="icon" src="./icons/image38.png" />Admin</a></li>
		<li><a class="button icon" href="login.php"><img class="icon" src="./icons/image7.png" />Login</a></li>
		<li><a class="button icon" href="help.php"><img class="icon" src="./icons/image8.png" />Help</a></li>
		<li><a class="button icon" href="search.php"><img class="icon" id="search" src="./icons/image9.png" /></a></li>
	  </ul>
	</div>
  </nav>';
		}
		else if (sessionExists()) {
			$topNav = '    <nav class="navbar navbar-default" role="navigation">
  	<div class="container">
  	  <div class="navbar-header">
		<a href="index.php"><img class="logo" src="./icons/image1.png" /></a>
	  	<div class="name-wrapper">
	  	  <font class="nav-font">SAFe Explorer</font>
	  	</div>
	  </div>
  	</div>
  	
  	<div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
	  	<li><a class="button icon" href="trains.php"><img class="icon" src="./icons/image4.png" />Trains</a></li>
	  	<li><a class="button icon" href="org_list.php"><img class="icon" src="./icons/image2.png" />Org</a></li>
	  	<li><a class="button icon" href="capacity.php"><img class="icon" src="./icons/image6.png" />Capacity</a></li>
		<li><a class="button icon" href="training.php"><img class="icon" src="./icons/image10.png" />Training</a></li>
		<li><a class="button icon" href="reporst.php"><img class="icon" src="./icons/image5.png" />Reports</a></li>
		<li><a class="button icon" href="admin.php"><img class="icon" src="./icons/image38.png" />Admin</a></li>
		<li><a class="button icon" href="login.php"><img class="icon" src="./icons/image7.png" />Login</a></li>
		<li><a class="button icon" href="help.php"><img class="icon" src="./icons/image8.png" />Help</a></li>
		<li><a class="button icon" href="search.php"><img class="icon" id="search" src="./icons/image9.png" /></a></li>
	  </ul>
	</div>
  </nav>';
		}
		else{
			$topNav = '   <nav class="navbar navbar-default" role="navigation">
  	<div class="container">
  	  <div class="navbar-header">
		<a href="index.php"><img class="logo" src="./icons/image1.png" /></a>
	  	<div class="name-wrapper">
	  	  <font class="nav-font">SAFe Explorer</font>
	  	</div>
	  </div>
  	</div>
  	
  	<div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
	  	<li><a class="button icon" href="trains.php"><img class="icon" src="./icons/image4.png" />Trains</a></li>
	  	<li><a class="button icon" href="org_list.php"><img class="icon" src="./icons/image2.png" />Org</a></li>
	  	<li><a class="button icon" href="capacity.php"><img class="icon" src="./icons/image6.png" />Capacity</a></li>
		<li><a class="button icon" href="training.php"><img class="icon" src="./icons/image10.png" />Training</a></li>
		<li><a class="button icon" href="reporst.php"><img class="icon" src="./icons/image5.png" />Reports</a></li>
		<li><a class="button icon" href="admin.php"><img class="icon" src="./icons/image38.png" />Admin</a></li>
		<li><a class="button icon" href="login.php"><img class="icon" src="./icons/image7.png" />Login</a></li>
		<li><a class="button icon" href="help.php"><img class="icon" src="./icons/image8.png" />Help</a></li>
		<li><a class="button icon" href="search.php"><img class="icon" id="search" src="./icons/image9.png" /></a></li>
	  </ul>
	</div>
  </nav>';
		}
		return $topNav;
	}
?>
