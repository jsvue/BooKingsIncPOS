<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  
  <a href="http://localhost/myfiles/loginboot/index2.php" target="_blank">
  <img src="booking1.png" alt="Logo"
    style="width:200px;height:100px;"></a>
    <title>New Books</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main>
      <p>Customer Shipping Information</p>
 
<br><br>

<form action="connect.php" method="post">
  <h2> Customer info</h2>
  <br>

Name:<input type="text" name="name">
Street Address:<input type="text" name="name">
State:<input type="text" name="name">
city:<input type="text" name="name">
Zipcode:<input type="text" name="name">
Country:<input type="text" name="name">
<input type="submit" name="submit" value="submit">

</form>

<?php
mysql_connect("localhost","root") or die("not connected");
mysql_select_db("shipping") or die("no db found");

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $sname= $_POST['sname'];
    $state= $_POST['state'];
    $city= $_POST['city'];
    $zipcode= $_POST['zipcode'];
    $country= $_POST['country'];

    $query = "insert into data (name,sname,state,city,zipcode,country) values ('$name', '$sname', '$state', '$city', '$zipcode', '$country')";
    if(mysql_query($query))
    {
      echo "<h3>Customer data is insserted successfully</h3>";
    }

  }

?>

    </main>
  </body>
</html>
