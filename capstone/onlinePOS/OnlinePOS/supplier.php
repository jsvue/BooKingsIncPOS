<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Inventory System</title>
    
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
	
	
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
   <style type="text/css">
<!--
.style1 {font-size: 36px}
-->
  </style>
  </head>
<body id="index">
<div align="center" class="style1">Team Mambers</div>
<br />
  <a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" /></a>
<p align="center"><a rel="facebox" href="addsupplier.php">Add Team Members </a> </p>
    <div id="pagewrap">
<div id="search">
        <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
      </div>
	 <div id="body">
<table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="#33FF00" style="margin-bottom:10px;">
              <th>Team Member</th>
              <th>Member Number </th>
			  <th>Birth Day</th>
			  <th>Address</th>
              <th>Contact Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$result = mysql_query("SELECT * FROM supplier");

while($row = mysql_fetch_array($result))
  {
    echo '<tr>';
      echo '<td>'.$row['company_name'].'</td>';
      echo '<td><div align="center">'.$row['contact_name'].'</div></td>';
	  echo '<td><div align="center">'.$row['bday'].'</div></td>';
      echo '<td><div align="center">'.$row['address'].'</div></td>';
      echo '<td><div align="center">'.$row['contactno'].'</div></td>';
      echo '<td><div align="center">'.'<a rel="facebox" href=editsupplier.php?id=' . $row["id"] .'>edit</a>'.'|'.'<a rel="facebox" href=deletes.php?id=' . $row["id"] .'>del</a>'.' </div></td>';
    echo '</tr>';
  }

mysql_close($con);
?> 
          </tbody>
       </table>
      </div>
    </div>
</body>
</html>



