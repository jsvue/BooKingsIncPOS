<?php
?>
<!DOCTYPE html>
<html>
<head>
<form action="includes/signup.inc.php" method="post">
  Customer's First Name:<input type="text" name="first" placeholder="Firstname">
  <br><br>
  Customer's Last Name: <input type="text" name="last" placeholder="Lastname">
  <br><br>
  Customer's Email:     <input type="text" name="email" placeholder="E-mail">
  <br><br>
  Customer's Street:    <input type="text" name="streetaddress" placeholder="Streetaddress">
  <br><br>
  Customer's City:      <input type="city" name="city" placeholder="City">
  <br><br>
  Customer's State:     <input type="state" name="state" placeholder="State">
  <br><br>
  Customer's Zipcode:    <input type="zipcode" name="zipcode" placeholder="Zipcode">
  <br><br>
  <button type="submit" name="submit">Sign up</button>
</form>

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}

