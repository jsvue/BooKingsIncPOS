<?php

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$streetaddress = $_POST['streetaddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$ccnumber = $_POST['ccnumber'];
$exp = $_POST['exp'];
$cccode = $_POST['cccode'];
$ccname = $_POST['ccname'];

echo "Order for $first $last for email $email <br />
has been ordered with free shipping to 
$streetaddress
$city
$state
$zipcode
and $ccnumber has been charged."
?>
