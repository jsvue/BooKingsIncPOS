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
      <p>New Books</p>
      <?php
// define variables and set to empty values
$nameErr = $emailErr = $paymentErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["payment"])) {
    $paymentErr = "payment is required";
  } else {
    $payment = test_input($_POST["payment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<br><br>


 <div class="items" id="item4">
    <a href="http://www.gameofthrones.com" target="_blank">
    <img src="$_57.jpg">
  </a>
    <input type="button" value="Add" onclick="cart('item1')">
    
    <a href="http://www.harrypotter.com" target="_blank">
    <img src="51HSkTKlauL._SX346_BO1,204,203,200_.jpg">
    </a> 
    <input type="button" value="Add" onclick="cart('item2')">

    <a href="http://www.harrypotter.com" target="_blank">
     <img src="51IiQ4r35LL._SX345_BO1,204,203,200_.jpg"></a>
    <input type="button" value="Add" onclick="cart('item3')">

    <a href="http://www.harrypotter.com" target="_blank">
    <img src="51jNORv6nQL._SX340_BO1,204,203,200_.jpg"></a>
    <input type="button" value="Add" onclick="cart('item4')">

    <a href="http://www.harrypotter.com" target="_blank">
    <img src="51HSkTKlauL._AC_US218_.jpg"></a>
    <input type="button" value="Add" onclick="cart('item5')">
    
    <a href="http://www.harrypotter.com" target="_blank">
    <img src="s-l300.jpg"></a>
    <input type="button" value="Add" onclick="cart('item5')">
  </div>



    </main>
  </body>
</html>
